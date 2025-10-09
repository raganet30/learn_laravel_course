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


            @for ($i=0; $i<10; $i++)
            <p> {{ $i }} </p>
            @endfor
    </body>
</html>