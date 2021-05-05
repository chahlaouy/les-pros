@props(['type'])

<div class="fixed bottom-0 right-0 p-10 z-50" x-data="{open : true}">
    <div class="rounded-2xl p-4 flex justify-between items-center {{$type === 'error' ? 'bg-red-300' : 'bg-green-100'}} " x-show.transition="open">
        <div class="mr-3 flex items-center">
            <ion-icon class="text-xl text-green-500 mr-3" name="checkmark-done-circle"></ion-icon>
            <span>{{$slot}}</span>
        </div>
        <span x-on:click="open = false" class="cursor-pointer block flex bg-green-400 rounded-full w-7 h-7 items-center justify-center">&times;</span>
    </div>
</div>