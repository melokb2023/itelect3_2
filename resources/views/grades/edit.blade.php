<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Grades Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-red-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black-900 dark:text-black-100">
                   <h6>Errors Encountered</h6>
                    @if($errors)
                       <ul>
                          @foreach($errors->all() as $error)
                         <li>{{$error}}</li>
                    @endforeach
                         </ul>
                    @endif
                    @foreach($grades as $g)
                    <form method = "POST" action="{{ route('grades-update',['grade' => $g->gNo]) }}">
                        @csrf
                        @method('patch')
                    
                       <div class="flex-items-center" style="text-align:center"><label for="Prelim">Prelim</label>
                    <div>
                    <input type="text"  name="xprelim" value="{{$g->prelim}}"/>
                    </div>
</div>
                       <div class="flex-items-center" style="text-align:center"><label for="Midterm">Midterm</label>
                    <div>
                    <input type="text"  name="xmidterm" value="{{$g->midterm}}"/>
                    </div>
</div>
                       <div class="flex-items-center" style="text-align:center"><label for="Final">Final</label>
                    <div> 
                    <input type="text"  name="xfinal" value="{{$g->final}}"/>
                    </div>
</div>
                       <div class="flex-items-center" style="text-align:center"><label for="Remarks">Remarks</label>
                    <div>
                    <input type="text" name="xremarks" value="{{$g->remarks}}"/>
                    </div>
</div>
                    
             <button type ="submit" class="mt-4 bg-red-200 text-black font-bold py-2 px-4 rounded"> Submit Info </button>
                   </form>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>