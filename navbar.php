<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(to right, #051937, #004d7a, #008793, #00bf72, #a8eb12);">
        <a class="navbar-brand" href="#">
        <label class="text-white text-center">Blood Bank Management</label>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
                </li>
                
                 <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Donor
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="insertdonor.php">Add donor</a>
                        <a class="dropdown-item" href="donor.php">Edit &And Del Donor</a>
                    </div>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seeker
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="insertseeker.php">Add Seeker</a>
                        <a class="dropdown-item" href="seeker.php">Edit And Delete</a>
                    </div>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="request.php">Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="report.php">Report</a>
                </li>
         
                <li class="nav-item" style="text-align: right">
                    <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                </li>
            </ul>
         

        </div>
    </nav>
