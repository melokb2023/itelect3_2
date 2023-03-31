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
                   <h6>Errors Encountered</h6>
                    @if($errors)
                       <ul>
                          @foreach($errors->all() as $error)
                         <li>{{$error}}</li>
                    @endforeach
                         </ul>
                         @endif
                         @foreach($enrolledsubjects as $ensubjects)
                    <form method = "POST" action="{{ route('enrolledsubjects-update',['esNo' => $ensubjects->esNo]) }}">
                        @csrf
                        @method('patch')
                       <div class="flex-items-center"><label for="Subject Code">Subject Code</label>
                    <div>
                        <input type="text" name="xsubjectCode" value="{{$ensubjects->subjectCode}}"/>
                    </div>
                </div>
                    <div class="flex-items-center"><label for="Description">Description</label>
                    <div>
                    <input type="text" name="xdescription" value="{{$ensubjects->description}}"/>
                    </div>
</div>
                       <div class="flex-items-center"><label for="Units">Units</label>
                    <div>
                    <input type="text" name="xunits" value="{{$ensubjects->units}}"/>
                    </div>
</div>
                       <div class="flex-items-center"><label for="Schedule">Schedule</label>
                    <div>
                    <input type="text" name="xschedule" value="{{$ensubjects->schedule}}"/>
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