<div>
<!--
1.There are 2 type of component [1.class base component, 2.Anonymous Component]
2.To create class base component command [ php artisan make:component Header ]
3.after creating component we can find 2 file 
    --1. App/Http/Views/Components/Header another in
    --2. resources/views/components/header.blade.php
-->
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    
    <h4>This is Class base Header Component</h4>
    <h3>Hi this is : {{$name}}</h3>
    <h2>Fruits are:</h2>
    <ul>
        @foreach($fruits as $fruit)
            <li>{{$fruit}}</li>
        @endforeach
    </ul>
</div>