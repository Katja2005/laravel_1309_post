<x-layout>
<div class="post-container">
    <a href="/post/create" class="new-note-btn">
        New post
    </a>
<div class="posts">
@foreach ($posts as $post )
<div class="post">
<div class="note-body">
    {{ Str::words($post->post, 30)}}
</div>
<div class="note-buttons">
<a href="#" class="note-edit-button">View</a>
<a href="#" class="note-edit-button">Edit</a>
<button class="note-delete-button">Delete</button>
</div>
</div>

@endforeach



</div>






</div>


</x-layout>
