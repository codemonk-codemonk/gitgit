@extends('layouts.app')

@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                    </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">


                  <table class="table">
                    <thead class=" text-primary">
                      <th>POLICY_ID</th>
                      <th> POLICY_FOR</th>

                    </thead>
                    <tbody>

                        <?php
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "superfinal";

                      $link = mysqli_connect($servername, $username, $password, $dbname);
                      if($link === false){
                          die("ERROR: Could not connect. " . mysqli_connect_error());
                      }
                      $user = Auth::User();
                      $sql = "SELECT * FROM policy WHERE aadharno = $user->aadharno  ";
                      if($result = mysqli_query($link, $sql)){
                          if(mysqli_num_rows($result) > 0){

                              while($row = mysqli_fetch_array($result)){
                                  echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                      echo "<td>" . $row['type'] . "</td>";
                                  echo "</tr>";

                              }
                              echo "</table>";
                              // Free result set
                              mysqli_free_result($result);
                          }
                      }

                      // Close connection
                      mysqli_close($link);
                      ?>

                    </tbody>
                  </table>


                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
