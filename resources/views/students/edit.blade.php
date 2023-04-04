<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Students Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-fuchsia-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black-900 dark:text-black-100">
                   <h6>Errors Encountered</h6>
                    @if($errors)
                       <ul>
                          @foreach($errors->all() as $error)
                         <li>{{$error}}</li>
                    @endforeach
                         </ul>
                    @endif
                    @foreach($studentinfo as $stuinfo)
                <form method = "POST" action="{{ route('students-update',['stuno' => $stuinfo->sno]) }}">
                        @csrf
                        @method('patch')
                       <div class="flex-items-center" style="text-align:center"><label for="ID Number">ID Number</label>
                    <div>
                        <input type="text" name="xidNo" value="{{$stuinfo->idNo}}"/>
                    </div>
                </div>
                    <div class="flex-items-center" style="text-align:center"><label for="First Name">First Name</label>
                    <div>
                    <input type="text" name="xfirstName" value="{{$stuinfo->firstName}}"/>
                    </div>
</div>
                       <div class="flex-items-center" style="text-align:center"><label for="Middle Name">Middle Name</label>
                    <div>
                    <input type="text" name="xmiddleName" value="{{$stuinfo->middleName}}"/>
                    </div>
</div>
                       <div class="flex-items-center" style="text-align:center"><label for="Last Name">Last Name</label>
                    <div>
                    <input type="text" name="xlastName" value="{{$stuinfo->lastName}}"/>
                    </div>
</div>
                       <div class="flex-items-center" style="text-align:center"><label for="Suffix">Suffix</label>
                    <div>
                    <input type="text" name="xsuffix" value="{{$stuinfo->suffix}}"/>
                    </div>
</div>
                       <div class="flex-items-center" style="text-align:center"><label for="Course">Course</label>
                    <div> 
                    <input type="text" name="xcourse" value="{{$stuinfo->course}}"/>
                    </div>
</div>
                       <div class="flex-items-center" style="text-align:center"><label for="Year">Year</label>
                    <div>
                    <input type="number" min="1" max="4" name="xyear" value="{{$stuinfo->year}}"/>
                    </div>
</div>
                       <div class="flex-items-center" style="text-align:center"><label for="birthDate"></label>
                    <div>
                    <input type="date" name="xbirthDate" value="{{$stuinfo->birthDate}}"/>
                    </div>
</div>
                       <div class="flex-items-center" style="text-align:center"><label for="Gender"></label>
                    <div>
                    <select name="xgender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
</select>
                    </div>
</div>
             <button type ="submit" style="text-align:center" class="mt-4 bg-violet-200 text-black font-bold py-2 px-4 rounded"> Submit Info </button>
                   </form>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>