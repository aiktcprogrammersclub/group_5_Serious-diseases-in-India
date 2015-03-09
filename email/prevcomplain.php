			
                    <tr>
                    <th></th>
                    <th>Post Your Complaint Here</th>
                     
                    </tr>
                
                     <form action="email_success.php" method="post" id="commentform">
                    <tr>
                       <td>UserName</td>
                        <td><?php echo $username ?></td>
                        <td><input type="text" class="form-control" name="username" id="inputName" placeholder="Enter Username" value="<?php echo $username ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>   
                     </tr>
                    <tr>
                        <td>Email ID</td>
                        <td><?php echo $email ?></td>
                        <td><input type="text" class="form-control" name="email" id="email" placeholder="Enter Email ID" value="<?php echo $email ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>   
                     </tr>
                    <tr>
                        <td>Contact No</td>
                        <td><?php echo $contact ?></td>
                        <td><input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact" value="<?php echo $contact ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>  
                    </tr>

                    <tr>
                        <td>Complaint</td>
                        <td><?php echo $complain ?></td>
                        <td><input type="text" class="form-control" id="complain" placeholder="Enter Your Complain" name="complain" value="<?php echo $complain ?>" required data-validation-required-message="Cannot Be Blank">
                        </td>   


                     </tr>
<tr>
    <td>
                                    
<button type="submit" class="btn btn-action">Submit</button>
  <td>
                    </tr>
                                      
                       
                    </form>
                </tbody></div></div></div>
            </table>
        </div>
    </div>
</div>
        
        <!---UPDATE INFO BLOCK ENDS--->
                
        <!---UPDATE PASSWORD BLOCK STARTS--->

				 <!-- /respond -->
            </form>
	</div>	<!-- /container -->
</div>

