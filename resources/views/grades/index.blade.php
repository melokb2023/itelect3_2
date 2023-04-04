<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Grades Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-violet-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black-900 dark:text-black-100">
                    
                <a class="mt-4 bg-teal-200 text-black font-bold py-2 px-4 rounded" href="{{ route('add-grades')}}">Add Grades</a>
                    <h6>List of Grades</h6>
                    <table class="border-separate border-spacing-5" bgcolor="green">
                      <tr>
                        <th>Enrolled Subjects Number</th>
                        <th>Student Number</th>
                        <th>Prelim</th>
                        <th>Midterm</th>
                        <th>Final</th>
                        <th>Remarks</th>
</tr>
                    <tbody>
                        @foreach($grades as $g)
                       <tr>
                        <td>{{$g->esNo }}</td>
                        <td>{{$g->sNo }} </td>
                        <td>{{$g->prelim }}</td>
                        <td>{{$g->midterm }}</td>
                        <td>{{$g->final }}</td>
                        <td>{{$g->remarks}}</td>
                        <td>
                            <a class="mt-4 bg-teal-200 text-black font-bold py-2 px-4 rounded" href= "{{route('grades-show', ['grade' => $g->gNo]) }}" >View</a>
                            <a class="mt-4 bg-blue-200 text-black font-bold py-2 px-4 rounded" href= "{{route('grades-edit', ['grade' => $g->gNo]) }}" >Edit</a>
                            <form method="POST" action = "{{ route('grades-delete', ['grade' => $g->gNo ])  }}" onclick="return confirm('Are you sure you want to delete this record?')">
                           @csrf
                           @method('delete')
                           <button class="mt-4 bg-red-200 text-black font-bold py-2 px-4 rounded" type="submit" >Delete</a>
                        </form>
                        <td>
                       </tr>
                        @endforeach
                </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
