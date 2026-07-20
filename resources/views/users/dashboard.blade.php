<x-dashboardLayout>

    <section id="library">
        <header class="p-3 flex flex-col md:flex-row md:justify-between md:items-center border-b border-[#b5ac99]">
            
            <div class="flex flex-col md:flex-row space-y-3  md:justify-between md:space-x-4 md:items-center">
                {{-- search book --}}
               <form action="{{ route('dashboard') }}" method="GET" class="w-full max-w-xs">
                    <div class="relative">
                        <input class="block bg-white w-full relative border border-[#b5ac99] py-1 outline-[#b5ac99] rounded-[10px] pl-8 pr-3 transition-all duration-[500ms] hover:outline text-sm" 
                            type="text" 
                            name="search" // [!code highlight]
                            value="{{ request('search') }}" // [!code highlight]
                            placeholder="Search books ...">
                            
                        <svg class="absolute top-1.5 left-2 text-[#b5ac99]" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path d='M19 11.5a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0m-2.107 5.42 3.08 3.08'/>
                        </svg>

                        @if(request('search'))
                            <a href="{{ route('dashboard', request()->except('search')) }}" class="absolute right-2 top-2 text-xs text-[#b5ac99] hover:text-[#FD232A] transition-colors">
                                ✕
                            </a>
                        @endif
                    </div>
                </form>

                <div id="btn-display-modal" class="bg-gradient-to-br text-[clamp(0.6rem,2vw,0.8rem)] from-[#059669] to-[#10b981] font-semibold p-2 rounded-[10px] text-[#fff] items-center shadow-[0_4px_14px_rgba(16,185,129,0.35)] md:px-5 transition-transform duration-[1000ms] hover:-translate-y-2 max-md:w-[30%]">
                    <a class="flex items-center space-x-1" href="">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                    <path d='M4 16.004V17a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-1m-8-.5v-11M15.5 8 12 4.5 8.5 8'/>
                    </svg>
                    <span class="whitespace-nowrap">Upload Book</span>
                    </a>
                </div>

            </div>
        </header>
        {{-- filter book --}}
        <div class="p-4 border-b border-[#b5ac99]">
            <ul class="flex space-x-4">
                <li class="{{ !request()->has('status') ? 'bg-[#10b981] text-white' : 'bg-white text-[#b5ac99]' }} text-[clamp(0.6rem,2vw,0.8rem)] py-2 px-4 rounded-full transition-colors duration-200">
                    <a href="{{ route('dashboard') }}" class="font-medium block">All Books</a>
                </li>

                <li class="{{ request('status') === 'reading' ? 'bg-[#10b981] text-white' : 'bg-white text-[#b5ac99]' }} text-[clamp(0.6rem,2vw,0.8rem)] py-2 px-4 rounded-full transition-colors duration-200">
                    <a href="{{ route('dashboard', ['status' => 'reading']) }}" class="font-medium block">Reading</a>
                </li>

                <li class="{{ request('status') === 'completed' ? 'bg-[#10b981] text-white' : 'bg-white text-[#b5ac99]' }} text-[clamp(0.6rem,2vw,0.8rem)] py-2 px-4 rounded-full transition-colors duration-200">
                    <a href="{{ route('dashboard', ['status' => 'completed']) }}" class="font-medium block">Finished</a>
                </li>

                <li class="{{ request('status') === 'not started' ? 'bg-[#10b981] text-white' : 'bg-white text-[#b5ac99]' }} text-[clamp(0.6rem,2vw,0.8rem)] py-2 px-4 rounded-full transition-colors duration-200">
                    <a href="{{ route('dashboard', ['status' => 'not started']) }}" class="font-medium block">Unread</a>
                </li>
            </ul>
        </div>

        <div> 
        {{-- display a success message when the book is successfully updated --}}
            @if (session('success'))
            <div id="success-alert" class="mb-6 flex items-center justify-between p-4 rounded-xl border border-[#059669]/20 bg-[#ecfdf5] text-[#047857] shadow-sm transition-all duration-500">
                <div class="flex items-center space-x-3">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-[#d1fae5] text-[#059669]">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold">Success!</p>
                        <p class="text-xs text-[#065f46]/80">{{ session('success') }}</p>
                    </div>
                </div>
                
                <button type="button" onclick="document.getElementById('success-alert').remove()" class="text-[#059669] hover:text-[#047857] transition-colors p-1 rounded-md hover:bg-[#d1fae5]/50">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <script>
                // Automatically fade out and remove the alert banner after 5 seconds
                setTimeout(() => {
                    const alert = document.getElementById('success-alert');
                    if (alert) {
                        alert.classList.add('opacity-0', '-translate-y-2');
                        setTimeout(() => alert.remove(), 500); // Wait for the transition to finish before dropping from DOM
                    }
                }, 5000);
            </script>
            @endif
            
        </div>

         {{-- Bookshelves --}}
        <div class="flex flex-col items-center md:flex-row md:space-x-3 p-4 ">
        
            <div class="flex flex-wrap gap-6 p-4">
                @forelse ($books as $book)
                    @php
                        // 1. Grab the primary genre denomination name string cleanly
                        $genreName = $book->genres->first()->denomination ?? 'Default';

                        // 2. Map specific genre terms to corresponding background styles
                        $genreColors = [
                            'Philosophy'      => 'bg-[#726252]', // Deep Earthy Brown
                            'Fiction'         => 'bg-[#23f0c7]', // Your original Bright Teal
                            'Drama'           => 'bg-[#FD232A]', // Crimson Red
                            'Science Fiction' => 'bg-[#1e3a8a]', // Deep Space Blue
                            'History'         => 'bg-[#9a8f7a]', // Muted Sage
                            'Default'         => 'bg-[#10b981]', // Emerald Backup Accent
                        ];

                        // 3. Fallback to the default emerald background if the genre isn't explicitly listed above
                        $cardBackground = $genreColors[$genreName] ?? $genreColors['Default'];
                    @endphp



                    <div class="rounded-[10px] p-2 w-[200px] transition-all duration-[500ms] hover:shadow-md shadow-[#0e0d0a] bg-transparent">
                        
                        <div class="{{ $cardBackground }} rounded-t-[10px] p-6 min-h-[120px] flex flex-col justify-between">
                            <h5 class="text-[#b5ac99] font-bold text-[clamp(0.5rem,1vw,0.7rem)] uppercase tracking-wider">
                                {{ $book->status ?? 'NOT STARTED' }}
                            </h5>
                            <h4 class="font-semibold text-white truncate text-[clamp(1rem,1.2vw,1.4rem)]" title="{{ $book->title }}">
                                {{ $book->title }}
                            </h4>
                        </div>
                        
                        <div class="p-2 bg-white rounded-b-[10px] flex flex-col space-y-4">
                            <div>
                                <h5 class="text-[#b5ac99] text-[clamp(0.5rem,1vw,0.7rem)] font-medium truncate" title="{{ $book->author }}">
                                    {{ $book->author }}
                                </h5>
                                
                                @if($book->genres->isNotEmpty())
                                    <span class="inline-block mt-1 text-[10px] px-2 py-0.5 rounded bg-[#f5f1ea] text-[#726252]">
                                        {{ $book->genres->first()->denomination }}
                                    </span>
                                @endif
                            </div>

                            <span class="text-[#b5ac99] font-semibold text-[clamp(0.4rem,1vw,0.6rem)] uppercase tracking-widest">
                                {{ $book->format }}
                            </span> 
                            
                            <a href="/reader/{{ $book->id }}" class="block text-center bg-[#10b981] text-white text-[clamp(0.6rem,1vw,0.8rem)] rounded-[10px] p-2 font-medium transition-transform duration-[1000ms] hover:-translate-y-2 cursor-pointer shadow-sm">
                                {{ $book->status === 'reading' ? 'Continue Reading' : 'Start Reading' }}
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="w-full flex flex-col items-center justify-center py-16 px-4 border-2 border-dashed border-[#d1c9bc] rounded-2xl">
                        <svg class="w-12 h-12 text-[#b5ac99] mb-3" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <p class="text-[#726252] font-semibold text-sm">Your bookshelf is empty</p>
                        <p class="text-xs text-[#b5ac99] mt-0.5">Click the upload button to add your first literary masterpiece!</p>
                    </div>
                @endforelse
            </div>


        </div>
        
        {{-- modal for uploading book --}}
        <div id="modal-book-upload" class="hidden fixed flex items-center justify-center inset-0 z-50 p-4 bg-[#F8F6F1CC]/40 backdrop-blur-sm">
        
            <div class=" p-3 rounded-[12px] bg-white max-w-md shadow-2xl max-h-[92vh] overflow-y-auto">
                <header class="flex flex-col space-y-3">
                    <div class="flex justify-between border-b border-[#d0cabc] pb-4">
                        <div>
                        <h4 class="font-bold font-black font-display text-[clamp(1rem,3vw,1.2rem)]">Add a New Book </h4>
                        <span class="text-[#b5ac99] text-[clamp(0.5rem,1vw,0.7rem)]">Fill in the details and upload your file</span>
                        </div>

                        <div>
                        <button id="close-btn" class="bg-[#9a8f7a] p-1 rounded-[10px] transition-color duration-[500ms] hover:bg-[#FD232A] hover:text-white" type="button"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d='M18 6 6 18M6 6l12 12'/></svg></button>
                        </div>

                    </div>
                    

                    @if ($errors->any()) 
                        <div class="mb-4 p-3 rounded-xl bg-red-50 border border-red-200 text-xs text-red-600 font-medium"> 
                            <p class="font-bold uppercase tracking-wider mb-1">Please fix the following issues:</p> 
                            <ul class="list-disc pl-4 space-y-0.5"> 
                                @foreach ($errors->all() as $error) 
                                    <li>{{ $error }}</li> 
                                @endforeach 
                            </ul> 
                        </div> 
                    @endif 
                </header>

                <form id="add-book" class="p-3" action="/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- input file --}}
                    <div>
                        <label for="file" class="block text-xs font-bold tracking-wider text-[#3d332d] uppercase mb-3">Book File <span class="text-red-500">*</span></label>
                        <div 
                            id="drop-zone"
                            class="flex flex-col items-center justify-center border-2 border-dashed border-[#d1c9bc] rounded-2xl bg-transparent py-12 px-6 transition-all duration-200 cursor-pointer hover:bg-[#fbfaf8] group">
                            <input type="file" id="file-input" name="book_file" accept=".pdf,.epub,.mobi" class="hidden" />

                            <div class="w-14 h-14 bg-[#f5f1ea] rounded-2xl flex items-center justify-center mb-4 transition-colors group-hover:bg-[#ebe5da]">
                            <svg class="w-6 h-6 text-[#726252]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16v3a2 2 0 002 2h14a2 2 0 002-2v3M12 5v11m0-11L9 8m3-3l3 3" />
                            </svg>
                            </div>

                            <p class="text-lg font-semibold text-[#1c1917] text-center mb-1">
                            Drag & drop your book here
                            </p>
                            @error('book_file') <span class="text-red-500">{{ $message }}</span> @enderror
                            <p class="text-sm text-[#a39786] text-center mb-6">
                            Supports <span class="font-semibold text-[#726252]">PDF, EPUB, MOBI</span> &mdash; up to 100 MB
                            </p>

                            <button 
                            type="button"
                            id="browse-btn"
                            class="flex items-center gap-2 bg-[#1c1611] hover:bg-[#2e251d] text-white font-medium text-sm py-3 px-6 rounded-xl transition-colors shadow-sm"
                            >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16v3a2 2 0 002 2h14a2 2 0 002-2v-3M12 5v11m0-11L9 8m3-3l3 3" />
                            </svg>
                            Browse files
                            </button>
                        </div>
                    </div>

                        {{-- Book title and author --}}
                    <div class="flex justify-between py-4">
                        {{-- book title --}}
                        <div class="flex flex-col space-y-1 w-[45%]">
                            <label class="block text-xs font-bold tracking-wider text-[#3d332d] uppercase mb-3" for="title">Book Title <span class="text-red-500">*</span></label>
                            <input class="border border-[#b5ac99] bg-white rounded-[10px] p-1" id="title" type="text" name="title" value="" placeholder="Ketala" required>
                            @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        {{-- author --}}
                         <div class="flex flex-col space-y-1 w-[45%]">
                            <label class="block text-xs font-bold tracking-wider text-[#3d332d] uppercase mb-3" for="author">Author <span class="text-red-500">*</span></label>
                            <input class="border border-[#b5ac99] bg-white rounded-[10px] p-1" id="author" type="text" name="author" value="" placeholder="Fatou Diome" required>
                            @error('author') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    {{-- visibility   --}}

                    <div class="flex flex-col space-y-2 border-b border-[#b5ac99] pb-6">
                        <label for="visibility">Visibility <span class="text-red-500">*</span></label>

                        <div class="flex space-x-4 justify-between">
                            <div class="border border-[#b5ac99]  md: w-[180px] bg-white p-3 rounded-[10px]">
                                <input type="radio" name="visibility" id="public" value="public" {{ old('visibility') === 'public' ? 'checked' : '' }} required>
                                <label for="public">Public</label><br>
                                <span class="text-[clamp(0.5rem,1vw,0.7rem)] text-[#b5ac99]">Visible to all club members and can be discussed</span>
                            </div>

                            <div class="border border-[#b5ac99]  md: w-[180px] bg-white p-3 rounded-[10px]">
                                <input type="radio" name="visibility" id="private" value="private" {{ old('visibility', 'private') === 'private' ? 'checked' : '' }} required>
                                <label for="public">Private</label><br>
                                <span class="text-[clamp(0.5rem,1vw,0.7rem)] text-[#b5ac99]">Only visible to you in your personal library</span>
                            </div>
                        </div>
                         
                    </div>

                    <div>
                        <label for="genre_id">Genre</label>
                        <select id="genre_id" name="genre_id" class="w-full border p-2 rounded-[10px] text-[#b5ac99]">
                            <option value="">Select a Genre</option>
                            @foreach(\App\Models\Genre::all() as $genre)
                                <option value="{{ $genre->id }}" {{ old('genre') == $genre->id ? 'selected' : '' }}>{{ $genre->denomination }}</option>
                            @endforeach
                        </select>
                        @error('genre_id') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex justify-between p-3 items-center">
                        <span class="text-[clamp(0.5rem,1vw,0.7rem)] text-#b5ac99]"><span class="text-red-500">*</span> Required fields </span>

                        <div class="flex space-x-3 text-[clamp(0.8rem,1vw,0.9rem)]">
                            <button type="button" id="cancel" class="bg-white px-4 py-1 rounded-[8px] transition-color duration-[500ms] hover:bg-[#FD232A] hover:text-white">Cancel</button>
                            <button type="submit" id="add-button" class="bg-gradient-to-br text-[clamp(0.6rem,2vw,0.8rem)] from-[#059669] to-[#10b981] font-semibold p-2 rounded-[10px] text-[#fff] shadow-[0_4px_14px_rgba(16,185,129,0.35)] md:px-5 transition-transform duration-[1000ms] hover:-translate-y-2" >Add to library</button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- force the modal to stay if there's any error --}}
            @if ($errors->any())
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const modal = document.getElementById('modal-book-upload');
                    if (modal) {
                        modal.classList.remove('hidden');
                    }
                });
            </script>
            @endif
        </div>

    </section>

    {{-- discover section --}}
    <section id="discover">
    </section>

    {{-- Book Club section --}}
    <section id="bookClub">
    </section>

    {{-- Reading Stat section --}}
    <section id="readingStats">
    </section>

    {{-- Settings --}}
    <section id="settings">
    </section>

    {{-- Help --}}
    <section id="help">
    </section>



@vite('resources/js/dashboard.js')


</x-dashboardLayout>