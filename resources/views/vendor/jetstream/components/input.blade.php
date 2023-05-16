@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-500 focus:border-green-200 focus:ring focus:ring-green-300 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>