@extends ('layout.generallayout')

@section('title') Edit Employee @endsection

@section ('content')
<div class="flex justify-center items-center min-h-[50vh] py-10 bg-gray-100">
    <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-semibold text-gray-900 text-center mb-6">Edit Employee</h2>

        <form action="/employee/{{$employee->id}}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- Employee ID -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Employee ID</label>

                

                <input type="text" value="{{old('employee_id', $employee->employee_id)}}" name="employee_id"   readonly
                    class="mt-1 block w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500">
                @error('employee_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Name Fields (First, Middle, Last) -->
            <div class="grid grid-cols-3 gap-4">
                <div>
                <label class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text"  
                        value="{{ old('fname', $employee->fname) ?: $employee->fname }}"  
                        name="fname"  
                        class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500">
                    @error('fname')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Middle Name</label>
                    <input type="text" value="{{old('mname', $employee->mname) ?: $employee->mname}}" name="mname"  
                        class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500">
                    @error('mname')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" value="{{old('lname', $employee->lname) ?: $employee->lname}}" name="lname"  
                        class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500">
                    @error('lname')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Address & Contact -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" value="{{old('address', $employee->address) ?: $employee->address}}" name="address"  
                        class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500">
                    @error('address')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Contact Number</label>
                    <input type="text" value="{{old('contact_no', $employee->contact_no)?: $employee->contact_no}}" name="contact_no"  
                        class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500">
                    @error('contact_no')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center mt-4">
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg shadow-md transition duration-300">
                    Save Employee
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
