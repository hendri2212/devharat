<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        .dashboard-watermark {
            font-size: 10rem;
            font-weight: 900;
            color: rgba(0, 0, 0, 0.1);
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            white-space: nowrap;
            user-select: none;
            z-index: 0;
        }
        .content-wrapper {
            position: relative;
            min-height: 60vh;
        }
    </style>

    <div class="content-wrapper flex items-center justify-center">
        <h1 class="dashboard-watermark">DASHBOARD</h1>
    </div>
</x-app-layout>
