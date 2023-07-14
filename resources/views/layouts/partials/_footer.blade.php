<footer> 
    <p> &copy; copyright {{ date('Y') }} &middot; 
         @if(!Route::is('about'))
        <a href={{route('about')}} class="text-indigo-500 hover:text-indigo-600 underline">About us</a> </p>
         @endif
</footer>