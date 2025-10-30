<html>
    <body>
        <h1>
            ABOUT US
        </h1>
        <h2>
            Name: {{ $name }}
        <h2>
        <h2>
            {{-- Email:  {{ $email }} --}}
            ID: {{ $id }}
        <h2>

            @include('sub_views.input',[
            'myName'=> 'John Doe',
            ])
           
    </body>
</html>