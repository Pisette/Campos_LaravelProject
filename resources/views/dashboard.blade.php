@section('title') Dashboard @endsection

@extends('layout.generallayout')


@section('content')

<div class="max-w-6xl mx-auto">
    <!-- Stats Cards -->
    <h3 class="text-4xl font-semibold mt-9 mb-3">Dashboard</h3>
    <div class="grid grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-4 rounded-xl shadow-md text-center">
            <div class="text-blue-500 text-3xl">📈</div>
            <h2 class="text-xl font-semibold">3450</h2>
            <p class="text-gray-500">Number of Sales</p>
            <span class="text-green-500">⬆ 11.01%</span>
        </div>
        <div class="bg-white p-4 rounded-xl shadow-md text-center">
            <div class="text-green-500 text-3xl">💰</div>
            <h2 class="text-xl font-semibold">$35,256</h2>
            <p class="text-gray-500">Sales Revenue</p>
            <span class="text-green-500">⬆ 21.07%</span>
        </div>
        <div class="bg-white p-4 rounded-xl shadow-md text-center">
            <div class="text-red-500 text-3xl">📊</div>
            <h2 class="text-xl font-semibold">$35.256</h2>
            <p class="text-gray-500">Average Price</p>
            <span class="text-green-500">⬆ 5.06%</span>
        </div>
        <div class="bg-white p-4 rounded-xl shadow-md text-center">
            <div class="text-purple-500 text-3xl">⚙️</div>
            <h2 class="text-xl font-semibold">15,893</h2>
            <p class="text-gray-500">Operations</p>
            <span class="text-green-500">⬆ 10.01%</span>
        </div>
    </div>

    <div class="max-w-6xl mx-auto mb-9">
        <div class="bg-white p-6 rounded-xl shadow-md">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Monthly Sales</h3>
                <div class="text-gray-400 cursor-pointer">⋮</div>
            </div>
            <div class="w-[600px] mx-auto">
                <canvas id="monthlySalesChart" class="w-full h-20"></canvas>
            </div>
        </div>
    </div>
    <!-- Bottom Section -->
    <div class="flex gap-4 mb-9">
        <!-- Monthly Target -->
        <div class="bg-white p-6 rounded-xl shadow-md w-1/2 text-center">
            <div class="flex justify-between items-center mb-2">
                <h3 class="text-lg font-semibold">Monthly Target</h3>
                <div class="text-gray-400 cursor-pointer">⋮</div>
            </div>
            <p class="text-gray-500">Target you’ve set for each month</p>

            <div class="relative w-48 h-48 mx-auto my-4">
                <canvas id="gaugeChart"></canvas>
                <div class="absolute inset-0 flex items-center justify-center text-2xl font-bold">75.55%</div>
            </div>

            <div class="bg-green-100 text-green-700 text-sm font-semibold px-3 py-1 rounded-full inline-block">+10%</div>
            <p class="text-gray-500 mt-2">You earn $3287 today, it's higher than last month.<br>Keep up your good work!</p>
        </div>

        <!-- Sales Analytics Image -->
        <div class="bg-white p-6 rounded-xl shadow-md w-1/2">
            <h3 class="text-lg font-semibold">Statistics</h3>
            <p class="text-gray-500">Target you’ve set for each month</p>

            <div class="flex space-x-2 mt-3">
                <button class="bg-gray-200 text-gray-900 px-4 py-2 rounded-md font-medium">Overview</button>
                <button class="bg-white text-gray-500 px-4 py-2 rounded-md font-medium">Sales</button>
                <button class="bg-white text-gray-500 px-4 py-2 rounded-md font-medium">Revenue</button>
                <button class="bg-white text-gray-500 p-2 rounded-md border"><span>📅</span></button>
            </div>

            <div class="mt-4">
                <canvas id="salesChart"></canvas>
            </div>
        </div>

    </div>




    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-9">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-s text-gray-900 uppercase bg-white-50 dark:bg-white-700 dark:text-gray-900">

                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Age
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Course
                    </th>

                </tr>
            </thead>

            <tbody>
                @forelse ($students as $students)
                <tr class="odd:bg-white odd:dark:bg-white-900 even:bg-blue-50 even:dark:bg-blue-50 border-b dark:border-gray-700 border-gray-200 text-gray-900 whitespace-nowrap dark:text-gray">


                    <th scope="row" class="px-6 py-4 font-medium ">
                        {{ $students['name'] }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $students['age'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $students['course'] }}
                    </td>

                    @empty
                    <p>No students to display!</p>



                </tr>
                @endforelse

            </tbody>
        </table>
    </div>





</div>

@endsection