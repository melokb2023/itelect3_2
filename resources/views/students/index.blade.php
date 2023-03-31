<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Students Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                <a class="mt-4 bg-teal-200 text-black font-bold py-2 px-4 rounded" href="{{ route('add-student')}}">Add Student Infromation</a>
                    <h6>List of Students</h6>
                    <table class="border-separate border-spacing-5">
                      <tr>
                        <th>ID No.</th>
                        <th>Full Name</th>
                        <th>Course</th>
                        <th>Birth Date</th>
                        <th>Gender</th>
</tr>
                    <tbody>
                        @foreach($studentinfo as $stuinfo)
                       <tr>
                        <td>{{$stuinfo->idNo}}</td>
                        <td>{{$stuinfo->firstName }} {{$stuinfo->middleName }} {{$stuinfo->lastName }}, {{$stuinfo->suffix }}</td>
                        <td>{{$stuinfo->course }} - {{$stuinfo->year }}</td>
                        <td>{{date("F j, Y" ,strtotime($stuinfo->birthDate))}}</td>
                        <td>{{$stuinfo->gender}}</td>
                        <td>
                            <a class="mt-4 bg-teal-200 text-black font-bold py-2 px-4 rounded" href= "{{route('students-show', ['stuno' => $stuinfo->sno]) }}" >View</a>
                            <a class="mt-4 bg-blue-200 text-black font-bold py-2 px-4 rounded" href= "{{route('students-edit', ['stuno' => $stuinfo->sno]) }}" >Edit</a>
                            <form method="POST" action = "{{ route('students-delete', ['stuno' => $stuinfo->sno ])  }}" onclick="return confirm('Are you sure you want to delete this record?')">
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
