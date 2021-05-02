<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" icon="grid">
    {{__('Dashboard')}}
</x-nav-link>
<x-nav-link :href="route('dashboard')" :active="request()->routeIs('home')" icon="chatbubble-ellipses">
    {{__('Inbox')}}
</x-nav-link>
<x-nav-link :href="route('dashboard')" :active="request()->routeIs('home')" icon="bag-add">
    {{__('Orders')}}
</x-nav-link>
<x-nav-link :href="route('dashboard')" :active="request()->routeIs('home')" icon="git-network">
    {{__('Broadcasts')}}
</x-nav-link>
<x-nav-link :href="route('dashboard')" :active="request()->routeIs('home')" icon="people">
    {{__('Customers')}}
</x-nav-link>
<x-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')" icon="document">
    {{__('Catalogue')}}
</x-nav-link>