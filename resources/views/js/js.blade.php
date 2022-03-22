@extends('master')

@section('title')
    Java script
@endsection
@section('body')


    @include('includes.image-change')
    @include('includes.color-change')

    <h1 id="h1"></h1>
    <div id="content"></div>


    <script>
        var name = 'jenifer'; // single
        document.write(name+' ');

        var data = [10, 20, 30]; // array
        for (key in data)
        {
            document.write(data[2]+'<br>');
        }

        // var country = 'BD';
        // var city = 'dhaka';
        // var area = 'K.B';
        // var location = {country: 'BD', city: 'Dhaka', area: 'K.B'};
        // var student = {name: 'Santo', phone: '0123456789', email: 'santo@santovaya.com'};

        var students = [
            {name: 'Santo', phone: '0123456789', email: 'santo@santovaya.com'},
            {name: 'Arif', phone: '9852147012', email: 'arif@bitm.com'},
            {name: 'Sudipto', phone: '16513251', email: 'sudipto@santovaya.com'},
            {name: 'jenifer', phone: '0123456789', email: 'jenifer@santovaya.com'},
            {name: 'sawon', phone: '5485444645', email: 'sawon@santovaya.com'},
            {name: 'sazzad', phone: '45648678686', email: 'sazzad@santovaya.com'},
        ];
        // document.write(students[4].email);
        for (index in students)
        {
            document.write('Student name : '+students[index].name+ ' student phone : '+ students[index].phone+ ' student email : '+ students[index].email + '<br>');
        }

    </script>



    <script>



    function createDiv(height, width, color) {
        var div = document.createElement('div');
        div.style.height = height+'px';
        div.style.width = width+'px';
        div.style.backgroundColor = color;
        div.style.float = 'left';
        div.setAttribute('id', 'colorDiv');

        // console.log(div);
        var content = document.getElementById('content');
        content.append(div);
    }
    // createDiv(300, 400, 'red');
    // createDiv(200, 100, 'green');
    // createDiv(300, 150, 'gray');
    // createDiv(500, 300, 'black');

 // var firstName = 'Sawon';
 // var lastName = 'Akter';

 function printName() {
    document.write(firstName+' '+lastName);
 }

 // printName();

 // getResult(10, 2);

 function getResult(firstNumber, lastNumber) {
     document.write(firstNumber - lastNumber+'<br>');
 }

 // getResult(100, 50);
 // getResult(500, 50);
 // getResult(100, 50);
 // getResult(400, 50);
 // getResult(100, 50);

 function getFullName(firstName, lastName) {
    var fullName = firstName+' '+lastName;
    // var h1Element = document.getElementById('h1');
    // var h1Element = document.getElementsByTagName(h1)[0];
    //  h1Element.innerHTML = fullName;
     document.getElementById('h1').innerHTML = fullName; // by tag
     document.getElementsByTagName('h1')[0].innerHTML = fullName; // by tag
 }

 // getFullName("Habibur", "Rahman");

            // name();
 // function name() {
     // document.write('Tarek');
     // alert('hello world');
 // }

        // var data = ['shila', 'sadia',false, 100, 10.25, 'bitm',true, 'bangladesh', 200, 25.30];
// document.write(data[7]);
//         document.write(data.length);

        // for (key in data)
        // {
        //     if (data[key] == 'bangladesh')
        //     {
                // document.write(data[key]+'<br>');
                // document.write(key+'<br>');
            // }
            // document.write(data[key]+'<br>');
            // document.write(key+'<br>');
        // }





        // var firstName = 'Sanjida';
        // var lastName = 'Akter';
        //
        // document.write(firstName +' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+ lastName);

        // document.write('Hello world');

        // major rules for variable
            // * start with var
            // * a-z, A-Z, 0-9, $
            // * no number in first


        // var Bangladesh = 'Hello bangladesh';
        // var arif_name = 'His name is Arif';
        // var hellojenifer = "Hello jenifar";
        // var crSaheb = "Sudipto Shaha";
        //
        // var firstNumer = 10;
        // var bitm = 'bitm';
        // var price  = 100.00;

        // document.write(typeof(price));

    </script>

@endsection
