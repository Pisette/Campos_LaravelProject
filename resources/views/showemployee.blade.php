@extends('layout.generallayout')

@section('title') Employee List @endsection

@section('content')
<a href="{{ route('employee.show', $employee->id) }}" class="text-blue-500 hover:text-blue-700">
<td class="px-6 py-4 text-left">{{ $employee->fname }}</td>
<td class="px-6 py-4 text-left">{{ $employee->lname }}</td>
</a>

<form href="{{ route('employee.show', $employee->id) }}" action="{{ route('employee.show', $employee->id) }}" method="GET" class="flex space-x-2">
            <input type="text" name="search" placeholder="Search employee..."
                class="px-4 py-2 border border-gray-300 rounded-md w-72 focus:ring-blue-500 focus:border-blue-500">
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-700 transition">
                Search
            </button>
        </form>
@endsection
