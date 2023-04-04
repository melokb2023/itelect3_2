<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Grades Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h6>List of Grades</h6>
                    <table class="border-separate border-spacing-5">
                      <tr>
                        <th>Enrolled Subjects Number</th>
                        <th>Student Number</th>
                        <th>Prelim</th>
                        <th>Midterm</th>
                        <th>Final</th>
                        <th>Remarks</th>
                    <tbody>
                    @foreach($grades as $g)
                       <tr>
                        <td>{{$g->esNo }}</td>
                        <td>{{$g->sNo }} </td>
                        <td>{{$g->prelim }}</td>
                        <td>{{$g->midterm }}</td>
                        <td>{{$g->final }}</td>
                        <td>{{$g->remarks}}</td>
                    </tr>
                        @endforeach
                   </tbody>

                    </table>
                    <a class="mt-4 bg-blue-200 text-black font-bold py-2 px-4 rounded" href="{{route('grades')}}"> Back </a>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
