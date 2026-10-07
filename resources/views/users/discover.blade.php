<x-dashboardLayout>
    <header class="p-3  md:items-center border-b border-[#b5ac99]">
            
            <div class="flex flex-col md:flex-row space-y-3 md:justify-between  mb-6">
                {{-- Search Form --}}
                <form action="{{ route('discovery') }}" method="GET" class="w-full max-w-xs">
                    {{-- Preserve the active 'type' tab when searching --}}
                    <input type="hidden" name="type" value="{{ request('type', 'book') }}">

                    <div class="relative">
                        <input class="block bg-white w-full relative border border-[#b5ac99] py-1.5 outline-[#b5ac99] rounded-[10px] pl-8 pr-8 transition-all duration-300 hover:outline text-sm" 
                            type="text" 
                            name="search" 
                            value="{{ request('search') }}" 
                            placeholder="{{ request('type') === 'people' ? 'Search people...' : 'Search books...' }}">
                            
                        <svg class="absolute top-2.5 left-2.5 text-[#b5ac99]" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path d='M19 11.5a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0m-2.107 5.42 3.08 3.08'/>
                        </svg>

                        @if(request('search'))
                            <a href="{{ route('discovery', request()->only('type')) }}" class="absolute right-2.5 top-2 text-xs text-[#b5ac99] hover:text-[#FD232A] transition-colors">
                                ✕
                            </a>
                        @endif
                    </div>
                </form>

                {{-- Filter Tabs: Book / People --}}
                <div class="flex space-x-1 border border-[#b5ac99]/40 p-1 rounded-[10px] items-center text-sm">
                    {{-- Book Tab --}}
                    <a href="{{ route('discovery', array_merge(request()->only('search'), ['type' => 'book'])) }}" 
                    class="px-4 py-1 rounded-[6px] transition-all duration-200 text-center flex-1 font-medium {{ request('type', 'book') === 'book' ? 'bg-[#0e0d0a] text-white' : 'text-[#726252] hover:text-black' }}">
                        Book
                    </a>

                    {{-- People Tab --}}
                    <a href="{{ route('discovery', array_merge(request()->only('search'), ['type' => 'people'])) }}" 
                    class="px-4 py-1 rounded-[6px] transition-all duration-200 text-center flex-1 font-medium {{ request('type') === 'people' ? 'bg-[#0e0d0a] text-white' : 'text-[#726252] hover:text-black' }}">
                        People
                    </a>
                </div>
            </div>
        </header>

        <main>
            <div class="cards p-3 flex space-x-4">
                <div class="stat-card border-[#e8e5de] bg-white p-3">
                    <h6 class="text-[clamp(0.7rem,2vw,0.8rem)] font-bold text-[#9a8f7a]">PUBLIC BOOKS</h6>
                    <span class="text-[clamp(2rem,2vw,2.5rem)] text-[#0e0d0a]">8</span>
                    <p class="text-[clamp(8px,1vw,9px)] text-[#b5ac99]">Shared by the Community</p>
                </div>
                <div class="stat-card border-[#e8e5de] bg-white p-3 md:w-[15%]">
                    <h6 class="text-[clamp(0.7rem,2vw,0.8rem)] font-bold text-[#9a8f7a]">GENRE</h6>
                    <span class="text-[clamp(2rem,2vw,2.5rem)] text-[#0e0d0a]">5</span>
                    <p class="text-[clamp(8px,1vw,9px)] text-[#b5ac99]">to explore</p>
                </div>
            </div>

            {{-- Results Content Section --}}
            <div class="p-2">
                @if(request('type', 'book') === 'book')
                    {{-- ================= PUBLIC BOOKS GRID ================= --}}
                    @if($books->isEmpty())
                        <div class="text-center py-12 text-[#726252]">
                            <p>No public books found matching your search.</p>
                        </div>
                    @else
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                            @foreach($books as $book)
                                <div class="bg-white border border-[#b5ac99]/30 rounded-[10px] p-3 flex flex-col justify-between hover:shadow-md transition-shadow">
                                    <div class="aspect-[2/3] bg-[#f0ede4] rounded-[6px] overflow-hidden mb-2 relative flex items-center justify-center text-xs text-[#726252]">
                                        @if(!empty($book->cover_image))
                                            <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="w-full h-full object-cover">
                                        @else
                                            <span class="px-2 text-center">{{ $book->title }}</span>
                                        @endif
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-sm line-clamp-1" title="{{ $book->title }}">{{ $book->title }}</h4>
                                        <p class="text-xs text-[#726252] line-clamp-1">{{ $book->author ?? 'Unknown Author' }}</p>
                                    </div>
                                    <a href="{{ route('book.reader', $book->id) }}" class="mt-3 block text-center bg-[#0e0d0a] text-white text-xs py-1.5 rounded-[6px] hover:bg-opacity-80 transition-opacity">
                                        Read
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-6">
                            {{ $books->links() }}
                        </div>
                    @endif

                @else
                    {{-- ================= PEOPLE GRID ================= --}}
                    @if($users->isEmpty())
                        <div class="text-center py-12 text-[#726252]">
                            <p>No users found matching your search.</p>
                        </div>
                    @else
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            @foreach($users as $person)
                                <div class="bg-white border border-[#b5ac99]/30 rounded-[10px] p-4 flex items-center justify-between hover:shadow-md transition-shadow">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 rounded-full bg-[#0e0d0a] text-white flex items-center justify-center font-bold text-sm">
                                            {{ strtoupper(substr($person->firstName ?? $person->firstName ?? 'U', 0, 1)) }}
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-sm">{{ $person->firstName ?? $person->firstName }} {{ $person->lastName ?? $person->lastName }}</h4>
                                            <p class="text-xs text-[#726252]">{{ $person->email }}</p>
                                        </div>
                                    </div>

                                    {{-- Chat Action Link --}}
                                    
                                    <a href="{{ route('chat.show', $person->id ?? $person->user_id) }}"   
                                    class="p-2 bg-[#f0ede4] hover:bg-[#0e0d0a] text-[#0e0d0a] hover:text-white rounded-full transition-colors"
                                    title="Chat with {{ $person->firstName }}">
                                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d='M3.464 16.828C2 15.657 2 14.771 2 11s0-5.657 1.464-6.828C4.93 3 7.286 3 12 3s7.071 0 8.535 1.172S22 7.229 22 11s0 4.657-1.465 5.828C19.072 18 16.714 18 12 18c-2.51 0-3.8 1.738-6 3v-3.212c-1.094-.163-1.899-.45-2.536-.96'/>
                                        </svg>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-6">
                            {{ $users->links() }}
                        </div>
                    @endif
                @endif
            </div>

        </main>


</x-dashboardLayout>