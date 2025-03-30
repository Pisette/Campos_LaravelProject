@extends('layout.generallayout')

@section('title') Control Structure @endsection

@section('content')

<div class="max-w-6xl mx-auto">

	<h3 class="text-4xl font-semibold mt-9 mb-3">Control Structure</h3>

	<div class="flex gap-4 mb-9">
		<!-- Monthly Target -->
		<div class="bg-white p-6 rounded-xl shadow-md w-1/2 text-center">
			<div class="flex justify-between items-center mb-2">
				<h3 class="text-lg font-semibold">Grade</h3>
			</div>
			@if ($grade >= 97 && $grade<= 100)
				<h2>You passed! Your grade is equivalent to 1.00!</h2>

				@elseif ($grade >= 94 && $grade <= 96)
					<h2>You passed! Your grade is equivalent to 1.25!</h2>

					@elseif ($grade >= 91 && $grade <= 93)
						<h2>You passed! Your grade is equivalent to 1.50!</h2>

						@elseif ($grade >= 88 && $grade <= 90)
							<h2>You passed! Your grade is equivalent to 1.75!</h2>

							@elseif ($grade >= 85 && $grade <= 87)
								<h2>You passed! Your grade is equivalent to 2.00!</h2>

								@elseif ($grade >= 82 && $grade <= 84)
									<h2>You passed! Your grade is equivalent to 2.25!</h2>

									@elseif ($grade >= 79 && $grade <= 81)
										<h2>You passed! Your grade is equivalent to 2.50!</h2>

										@elseif ($grade == 75)
										<h2>You passed! Your grade is equivalent to 3.00!</h2>

										@elseif ($grade >= 0 && $grade <= 74)
											<h2>You Failed! Your grade is equivalent to 5.00!</h2>

											@else
											<h2>Invalid</h2>

											@endif
		</div>

		<!-- Sales Analytics Image -->
		<div class="bg-white p-6 rounded-xl shadow-md w-1/2	">
			<div class="flex justify-between items-center mb-2">
				<h3 class="text-lg font-semibold">For loop</h3>
			</div>

			@php
				$row = 10;
			@endphp
			
			@for ($i = 0; $i <= $row; $i++)

				@for ($j=0; $j <=$i; $j++)

				@if ($i == $row)
				*

				@elseif ($i == $j || $j == 0)
				*

				@else
				-

				@endif

				@endfor
				<br>
				@endfor

		</div>

	</div>

	<div class="flex justify-between items-center mb-2 mr-5">
		<h3 class="text-lg font-semibold">Employee</h3>
	</div>

	  <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6 mb-6">
        <table class="w-full text-sm text-left text-gray-900 bg-white rounded-xl border border-gray-300" id="employeeTable">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200">

				<tr>
					<th scope="col" class="px-6 py-3">
						Name
					</th>
					<th scope="col" class="px-6 py-3">
						Age
					</th>
					<th scope="col" class="px-6 py-3">
						Department
					</th>

				</tr>
			</thead>

			<tbody>
				@forelse ($employee as $employee)
				<tr class="border-b border-gray-300 odd:bg-white even:bg-gray-100">

					<th scope="row" class="px-6 py-4 font-medium ">
						{{ $employee['name'] }}
					</th>
					<td class="px-6 py-4">
						{{ $employee['age'] }}
					</td>
					<td class="px-6 py-4">
						{{ $employee['dept'] }}
					</td>

					@empty
					<p>No employee to display!</p>
				</tr>
				@endforelse

			</tbody>
		</table>
	</div>

</div>

@endsection