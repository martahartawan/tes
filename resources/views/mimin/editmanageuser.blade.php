<x-admin-layout>
    <div style="font-size:30px;">
        {{$title}}
        <div class="hr bg-sky-400"></div>
    </div>
    <div class="box1" style="margin-top: 20px;">
        @if (count($errors) > 0)
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('user.update', $user->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="px-4 py-5 space-y-4 sm:p-6">
                <label class="block text-sm text-lg">Nama</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" value="{{$user->name}}" name="name" id="name" placeholder="Masukan Nama">
                </div>
                <label class="block text-sm text-lg">Username</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" value="{{$user->username}}" name="username" id="username" placeholder="Masukan Username">
                </div>
                <label class="block text-sm text-lg">Password</label>
                <div>
                    <input type="password" class="flex-1 block w-full form" name="password" id="password" placeholder="Masukan Password">
                </div>
                <label class="block text-sm text-lg">Email</label>
                <div>
                    <input type="email" class="flex-1 block w-full form" value="{{$user->email}}" name="email" id="email" placeholder="Masukan Email">
                </div>
                <label class="block text-sm text-lg">Admin Status</label>
                <div>
                    <input type="radio" class="form" name="admin_status" id="admin_status" value="1"><label style="margin-left:5px;">Admin</label>
                    <br>
                    <input type="radio" class="form" name="admin_status" id="admin_status" value="0"><label style="margin-left:5px;">User</label>
                </div>
                <button type="submit" class="inline-flex justify-center bg-green-500 hover:bg-green-700 text-white py-2 px-5" style="border-radius:18px;">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>