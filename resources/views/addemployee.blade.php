@extends ('layout.generallayout')

@section('title') Add Employee @endsection

@section ('content')
<div class="flex justify-center items-center min-h-[50vh] py-10 bg-gray-100">
    <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-semibold text-gray-900 text-center mb-6">Add Employee</h2>

        <form action="/employee" method="POST" class="space-y-4">
            @csrf

            <!-- Employee ID -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Employee ID</label>
                <input type="text" value="{{ old('employee_id') }}" name="employee_id"  
                    class="mt-1 block w-full px-4 py-3 bg-white border border-gray-300 rounded-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500 
                    @error('employee_id') border-red-500 @enderror">
                
                @error('employee_id')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Name Fields -->
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" value="{{ old('fname') }}" name="fname"  
                        class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500 
                        @error('fname') border-red-500 @enderror">
                    
                    @error('fname')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Middle Name</label>
                    <input type="text" value="{{ old('mname') }}" name="mname"  
                        class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500 
                        @error('mname') border-red-500 @enderror">
                    
                    @error('mname')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" value="{{ old('lname') }}" name="lname"  
                        class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500 
                        @error('lname') border-red-500 @enderror">
                    
                    @error('lname')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Address & Contact Number -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" value="{{ old('address') }}" name="address"  
                        class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500 
                        @error('address') border-red-500 @enderror">
                    
                    @error('address')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Contact Number</label>
                    <input type="text" value="{{ old('contact_no') }}" name="contact_no"  
                        class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500 
                        @error('contact_no') border-red-500 @enderror">
                    
                    @error('contact_no')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
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
