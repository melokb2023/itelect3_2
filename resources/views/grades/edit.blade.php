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
                   <h6>Errors Encountered</h6>
                    @if($errors)
                       <ul>
                          @foreach($errors->all() as $error)
                         <li>{{$error}}</li>
                    @endforeach
                         </ul>
                    @endif
                    @foreach($grades as $g)
                    <form method = "POST" action="{{ route('grades-update',['esNo' => $g->esNo]) }}">
                        @csrf
                        @method('patch')
                       <div class="flex-items-center"><label for="Grade Number">Grade Number</label>
                    <div>
                        <input type="text" name="xidNo" value="{{$g->gNo}}"/>
                    </div>
                </div>
                    <div class="flex-items-center"><label for="Enrolled Subjects Number">Enrolled Subjects Number</label>
                    <div>
                    <input type="text" name="xesNo" value="{{$g->esNo}}"/>
                    </div>
</div>
                       <div class="flex-items-center"><label for="Student Number">Student Number</label>
                    <div>
                    <input type="text" name="xsNo" value="{{$g->sNo}}"/>
                    </div>
</div>
                       <div class="flex-items-center"><label for="Prelim">Prelim</label>
                    <div>
                    <input type="decimal" precision="3" scale="2" name="xprelim" value="{{$g->prelim}}"/>
                    </div>
</div>
                       <div class="flex-items-center"><label for="Midterm">Midterm</label>
                    <div>
                    <input type="decimal" precision="3" scale="2" name="xmidterm" value="{{$g->midterm}}"/>
                    </div>
</div>
                       <div class="flex-items-center"><label for="Final">Final</label>
                    <div> 
                    <input type="decimal" precision="3" scale="2" name="xfinal" value="{{$g->final}}"/>
                    </div>
</div>
                       <div class="flex-items-center"><label for="Remarks">Remarks</label>
                    <div>
                    <input type="text" name="xremarks" value="{{$g->remarks}}"/>
                    </div>
</div>
                    
             <button type ="submit"> Submit Info </button>
                   </form>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>