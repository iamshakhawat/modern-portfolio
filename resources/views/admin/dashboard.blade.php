@extends('layout.admin.admin')
@section('title', 'Admin Dashboard')
@section('content')

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div
            class="lg:col-span-2 bg-white dark:bg-slate-800 h-96 rounded-3xl border border-gray-200 dark:border-slate-700 flex flex-col items-center justify-center text-gray-300 dark:text-slate-600">
            <i class="fas fa-chart-line text-7xl mb-4 opacity-20"></i>
            <p class="font-bold text-lg">Activity Visualization Panel</p>
            <p class="text-sm opacity-50">Data syncs every 60 seconds</p>
        </div>
        <div class="bg-white dark:bg-slate-800 h-96 rounded-3xl border border-gray-200 dark:border-slate-700 p-6">
            <h3 class="font-bold text-gray-800 dark:text-white text-lg mb-6">Recent Log Activity</h3>
            <div class="space-y-6">
                <div class="flex items-start space-x-4">
                    <div class="w-2 h-2 rounded-full bg-blue-500 mt-1.5"></div>
                    <div>
                        <p class="text-sm text-gray-700 dark:text-gray-300 font-semibold">User
                            permission updated</p>
                        <p class="text-[10px] text-gray-400 mt-1 uppercase tracking-widest font-bold">
                            12:30 PM</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="w-2 h-2 rounded-full bg-emerald-500 mt-1.5"></div>
                    <div>
                        <p class="text-sm text-gray-700 dark:text-gray-300 font-semibold">Backup
                            completed successfully</p>
                        <p class="text-[10px] text-gray-400 mt-1 uppercase tracking-widest font-bold">
                            Yesterday</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div
            class="lg:col-span-2 bg-white dark:bg-slate-800 h-96 rounded-3xl border border-gray-200 dark:border-slate-700 flex flex-col items-center justify-center text-gray-300 dark:text-slate-600">
            <i class="fas fa-chart-line text-7xl mb-4 opacity-20"></i>
            <p class="font-bold text-lg">Activity Visualization Panel</p>
            <p class="text-sm opacity-50">Data syncs every 60 seconds</p>
        </div>
        <div class="bg-white dark:bg-slate-800 h-96 rounded-3xl border border-gray-200 dark:border-slate-700 p-6">
            <h3 class="font-bold text-gray-800 dark:text-white text-lg mb-6">Recent Log Activity</h3>
            <div class="space-y-6">
                <div class="flex items-start space-x-4">
                    <div class="w-2 h-2 rounded-full bg-blue-500 mt-1.5"></div>
                    <div>
                        <p class="text-sm text-gray-700 dark:text-gray-300 font-semibold">User
                            permission updated</p>
                        <p class="text-[10px] text-gray-400 mt-1 uppercase tracking-widest font-bold">
                            12:30 PM</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="w-2 h-2 rounded-full bg-emerald-500 mt-1.5"></div>
                    <div>
                        <p class="text-sm text-gray-700 dark:text-gray-300 font-semibold">Backup
                            completed successfully</p>
                        <p class="text-[10px] text-gray-400 mt-1 uppercase tracking-widest font-bold">
                            Yesterday</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div
            class="lg:col-span-2 bg-white dark:bg-slate-800 h-96 rounded-3xl border border-gray-200 dark:border-slate-700 flex flex-col items-center justify-center text-gray-300 dark:text-slate-600">
            <i class="fas fa-chart-line text-7xl mb-4 opacity-20"></i>
            <p class="font-bold text-lg">Activity Visualization Panel</p>
            <p class="text-sm opacity-50">Data syncs every 60 seconds</p>
        </div>
        <div class="bg-white dark:bg-slate-800 h-96 rounded-3xl border border-gray-200 dark:border-slate-700 p-6">
            <h3 class="font-bold text-gray-800 dark:text-white text-lg mb-6">Recent Log Activity</h3>
            <div class="space-y-6">
                <div class="flex items-start space-x-4">
                    <div class="w-2 h-2 rounded-full bg-blue-500 mt-1.5"></div>
                    <div>
                        <p class="text-sm text-gray-700 dark:text-gray-300 font-semibold">User
                            permission updated</p>
                        <p class="text-[10px] text-gray-400 mt-1 uppercase tracking-widest font-bold">
                            12:30 PM</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="w-2 h-2 rounded-full bg-emerald-500 mt-1.5"></div>
                    <div>
                        <p class="text-sm text-gray-700 dark:text-gray-300 font-semibold">Backup
                            completed successfully</p>
                        <p class="text-[10px] text-gray-400 mt-1 uppercase tracking-widest font-bold">
                            Yesterday</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
