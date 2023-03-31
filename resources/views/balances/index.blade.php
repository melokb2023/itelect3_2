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
                    
                <a href="{{ route('add-balances')}}">Add Balances</a>
                    <h6>List of Grades</h6>
                    <table class="border-separate border-spacing-5">
                      <tr>
                        <th>Student Number</th>
                        <th>Amount Due</th>
                        <th>Total Balance</th>
                        <th>Notes</th>
</tr>
                    <tbody>
                        @foreach($balances as $b)
                       <tr>
                        <td>{{$b->sNo }} </td>
                        <td>{{$b->amountDue }}</td>
                        <td>{{$b->totalBalance }} </td>
                        <td>{{$b->notes }}</td>
                        <td>
                            <a class="mt-4 bg-teal-200 text-black font-bold py-2 px-4 rounded" href= "{{route('balances-show', ['bNo' => $b->bNo]) }}" >View</a>
                            <a class="mt-4 bg-blue-200 text-black font-bold py-2 px-4 rounded" href= "{{route('balances-edit', ['bNo' => $b->bNo]) }}" >Edit</a>
                            <form method="POST" action = "{{ route('balances-delete', ['b' => $b->bNo ])  }}" onclick="return confirm('Are you sure you want to delete this record?')">
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
