@extends('layout')

@section('title')
    Dashboard page
@endsection

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
                <div style="width: 50rem">
                    <canvas id="myChart"></canvas>
                </div>


<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Animals',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

            <div class="table-style">
                <table>
                    <tr>
                        <th>#</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                    </tr>
                    <tr>
                        <td>123</td>
                        <td>Lorem</td>
                        <td>ipsium</td>
                        <td>Germany</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>23443</td>
                        <td>Moctezuma</td>
                        <td>isco Chang</td>
                        <td>Mexico</td>
                    </tr>
                </table> 
            </div>
        </article>
    </section>

@endsection