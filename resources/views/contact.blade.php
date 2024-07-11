<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
        .contact-form {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .table-container {
            margin-top: 50px;
        }
        .btn-contact{
            background-color:#5D6892;
            border-radius:16px;
            padding:15px 30px;
            color: white;
            font-weight: bold;
            font-family: 'Inter', sans-serif;
        }.form-group {
    margin-bottom: 1.5rem;
}

.form-control {
   
    padding: 0.75rem;
    
    
}
.contact{
    background-color:none; 
    display:grid; 
    justify-content:center; 
    align-items:center;
    text-align:center;
    border-radius: 25px;
}
        
    </style>
</head>
<body>
@include('header')

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7 contact" >
            <h2>contactez-nous</h2>
            <p>Des questions ou des remarques ? Écrivez-nous simplement un message !</p>
                
                    
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="btn-contact">Submit</button>
                    </form>

                
            </div>
        </div>
    </div>
        <!-- <div class="row justify-content-center table-container">
            <div class="col-md-10">
                <h3>Submitted Contacts</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->message }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> -->
    </div>
    @include('footer')

    
    
    
    
</body>
</html>