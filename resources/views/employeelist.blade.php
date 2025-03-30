@extends('layout.generallayout')

@section('title') Employee List @endsection

@section('content')
<div class="max-w-6xl mx-auto">
    <h3 class="text-4xl font-semibold mt-9 mb-3 text-gray-500">Employee List</h3>

    <!-- Flex container for sorting and Add Employee button -->
    <div class="flex justify-between items-center mb-4">
        <!-- Sort Choice Dropdown -->
        <a href="/employee/create" class="bg-blue-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-700">
            + Add Employee
        </a>


        <div>
            <label for="sort" class="text-gray-700 text-sm font-medium">Sort by:</label>
            <select id="sort" onchange="sortEmployees()" class="border border-gray-300 px-3 py-2 rounded-md text-gray-900 focus:ring-blue-500 focus:border-blue-500">
                <option value="id">Employee ID</option>
                <option value="fname">First Name</option>
                <option value="lname">Last Name</option>
                <option value="address">Address</option>
            </select>
        </div>

        <!-- Add Employee Button -->
        
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6 mb-6">
        <table class="w-full text-sm text-gray-900 bg-white rounded-xl border border-gray-300" id="employeeTable">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left">Employee ID</th>
                    <th class="px-6 py-3 text-left">First Name</th>
                    <th class="px-6 py-3 text-left">Last Name</th>
                    <th class="px-6 py-3 text-left w-1/8">Action</th>
                </tr>
            </thead>
            <tbody id="employeeBody">
                @foreach ($employee as $emp)
                <tr class="border-b border-gray-300 odd:bg-white even:bg-gray-100">
                    <td class="px-6 py-4 text-left">{{ $emp->employee_id }}</td>
                    <td class="px-6 py-4 text-left">{{ $emp->fname }}</td>
                    <td class="px-6 py-4 text-left">{{ $emp->lname }}</td>
                    <td class="px-6 py-4 text-left w-1/4 whitespace-nowrap flex items-center space-x-3">
                        <a href="{{ route('employee.edit', $emp->id) }}" class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="/employee/{{$emp->id}}    " method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                        <a href="javascript:void(0);" onclick="showEmployeeModal('{{ $emp->employee_id }}', '{{ $emp->fname }}', '{{ $emp->lname }}', '{{ $emp->address }}', '{{ $emp->contact_no }}')" class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tailwind Styled Pagination -->
    <div class="mt-6 flex justify-center">
        {{ $employee->links('vendor.pagination.tailwind') }}
    </div>

    <!-- Employee Details Modal -->
    <div id="employeeModal" class="fixed inset-0 hidden flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-lg font-semibold mb-4">Employee Details</h2>
            <div id="empInfo" class="text-gray-700 text-left space-y-2"></div>
            <div class="flex justify-center mt-6">
                <button onclick="closeEmployeeModal()" class="px-4 py-2 bg-blue-600 text-white rounded-md">Close</button>
            </div>
        </div>
    </div>

    <script>
        function showEmployeeModal(id, fname, lname, address, contact) {
            document.getElementById('empInfo').innerHTML = `
                <p><strong>ID:</strong> ${id}</p>
                <p><strong>Name:</strong> ${fname} ${lname}</p>
                <p><strong>Address:</strong> ${address}</p>
                <p><strong>Contact:</strong> ${contact}</p>
            `;
            document.getElementById('employeeModal').classList.remove('hidden');
        }

        function closeEmployeeModal() {
            document.getElementById('employeeModal').classList.add('hidden');
        }

        function sortEmployees() {
            let table = document.getElementById("employeeTable");
            let rows = Array.from(table.rows).slice(1); // Skip header row
            let sortType = document.getElementById("sort").value;

            rows.sort((a, b) => {
                let colIndex;
                switch (sortType) {
                    case 'id': colIndex = 0; break;
                    case 'fname': colIndex = 1; break;
                    case 'lname': colIndex = 3; break;
                    case 'address': colIndex = 4; break;
                }

                let valA = a.cells[colIndex].innerText.toLowerCase();
                let valB = b.cells[colIndex].innerText.toLowerCase();

                return valA.localeCompare(valB);
            });

            let tbody = document.getElementById("employeeBody");
            tbody.innerHTML = "";
            rows.forEach(row => tbody.appendChild(row));
        }
    </script>
</div>

@if(session('success'))
    <div id="successMessage" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white text-gray-900 px-6 py-4 rounded-lg shadow-lg w-96 text-center">
            <h2 class="text-lg font-semibold">Success</h2>
            <p class="mt-2">{{ session('success') }}</p>
            <button onclick="closePopup()" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md">OK</button>
        </div>
    </div>

    <script>
        function closePopup() {
            document.getElementById('successMessage').remove();
        }
        setTimeout(closePopup, 3000); // Auto-hide after 3 seconds
    </script>
@endif

@endsection
