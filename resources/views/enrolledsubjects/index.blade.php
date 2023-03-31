<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Enrolled Subjects Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                <a class="mt-4 bg-teal-200 text-black font-bold py-2 px-4 rounded" href="{{ route('add-enrolledsubjects')}}">Go To Enrolled Subjects Creation</a>
                    <h6>Enrolled Subjects</h6>
                    <table class="border-separate border-spacing-5">
                      <tr>
                        <th>Subject Code</th>
                        <th>Description</th>
                        <th>Units</th>
                        <th>Schedule</th>
</tr>
                    <tbody>
                        @foreach($enrolledsubjects as $ensubjects)
                       <tr>
                        <td>{{$ensubjects->subjectCode}}</td>
                        <td>{{$ensubjects->description}}</td>
                        <td>{{$ensubjects->units }}</td>
                        <td>{{$ensubjects->schedule }}</td>
                        <td>
                            <a class="mt-4 bg-teal-200 text-black font-bold py-2 px-4 rounded" href= "{{route('enrolledsubjects-show', ['esNo' => $ensubjects->esNo]) }}" >View</a>
                            <a class="mt-4 bg-blue-200 text-black font-bold py-2 px-4 rounded" href= "{{route('enrolledsubjects-edit', ['esNo' => $ensubjects->esNo]) }}" >Edit</a>
                            <form method="POST" action = "{{ route('enrolledsubjects-delete', ['esNo' => $ensubjects->esNo ])  }}" onclick="return confirm('Are you sure you want to delete this record?')">
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
