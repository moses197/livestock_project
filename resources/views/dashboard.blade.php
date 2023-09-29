@extends('layout')

@section('content')
    <section class="flex">
        <nav>
            <div class="nav-col">
                <p style="color: aliceblue;">DashBoard</p>
                <a href="">Orders</a>
                <a href="">Products</a>
                <a href="">Customers</a>
                <a href="">Reports</a>
                <a href="">Integrations</a>
            </div>

            <div class="nav-col">
                <p style="color: aliceblue;">Saved Report</p>
                <a href="">Current month </a>
                <a href="">Last quarter</a>
                <a href="">Social engagement</a>
                <a href="">Year-end sale</a>
            </div>

            <div class="nav-col">
                <a href="">Logout</a>
            </div>
            
        </nav>
        <article>
            <h2 style="color: aliceblue;">Dashboard</h2>
            <div>
                <table></table>
            </div>
        </article>
    </section>

@endsection