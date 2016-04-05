<!DOCTYPE html>
<!-- by alex s-->
<html>
    <body>
        
        <h1>Background</h1>
        <p>WPA2 is one of the most used security methods for securing wireless networks, unforunetely it is only secure as it's weakest link which is usually the us, humans. With open-source software such as aircrack-ng, it is possible to brute force WPA2 security measures based on bad/easy to guess passwords based on information heard from the wireless signals. The brute force methods are based on word list recovery, aka lists which usually contains commonly used passwords and ones released from data breaches. These software takes a considerable amount of resources to do the computations nessisary to recover these passwords which only gets faster as technology improves. <br>
        Our project focuses on using aircrack-ng and hashcat which are softwares that recovers passwords based on brute force methods and a key piece of information found from wireless traffic called an EAPOL. Currently these softwares only work on the local device, which is impractical when doing this type of activity in a large geographical location; current mobile devices are unable to handle the computation in a reasonable amount of time.
        </p>
        
        <h1>Our Project - Cloud-Based WPA2 Recovery</h1>
        <p>We decided to create a cloud-based service where we have nodes, nicknamed "scanners", which will do 2.4 Ghz unlicenced radio band survailence over a geographical area and send back the information to a remote network server. This diverse set of unsanitized data would be processed to look for the targeted EAPOLs and other key info which are shipped to a cluster of high-preformance computation servers for password recovery. Once the results are found, key information is then stored in a database for the sake of big data collection. This would not only allow us to do Wi-Fi survailence across a large geographic area, but also split the tasks throughout multiple devices to improve the rates at which password are recovered. The scanners uses passive interception.
        </p>
    
        <h1>Topology</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-7"> <img src="img-net4901-topology.png" style="max-width:600px;"> </div>
                <div class="col-md-5">
                    <p>On the left is a figure of the topology that we've built. Using the DMZ approach we've segmented our network policies such that external and internal do not have direct communication to each other. Below is a brief explaination of how traffic travels for our implementation. </p>
                <p>The scanner do a survailence at a specific channel in the 2.4 Ghz band and stores the data into an archive. It will then push the files towards the file server. The application server will pull the archived files and look for .cap filetypes. If it finds the EAPOLS it needs, this along with other information are sent to the high-performance computation servers for  password recovery. Results are sent back to the application server where it is then injected into an sql database which will be display using a web server. </p>
                </div>
            </div>
        </div>
        
        <h1>ISSUES FACED</h1>
        Some of the issues we faced includes the lack of available hardware for our project, incompatibility with legacy Radeon GPUs which took alot of time for troubleshooting. In the end for now we used CPU rather then GPU for the password recovery. We also had to use our application server as our "high-performance" password recovery server.
        
        <h1>Powered By</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-3"><img src="img-logo1.png" style="max-width:200px;"></div>
                <div class="col-md-3"><img src="img-logo2.png" style="max-width:200px;"></div>
                <div class="col-md-3"><img src="img-logo3.png" style="max-width:200px;"></div>
                <div class="col-md-3"><img src="img-logo4.png" style="max-width:200px;"></div>
                <div class="col-md-3"><img src="img-logo5.png" style="max-width:200px;"></div>
                <div class="col-md-3"><img src="img-logo6.png" style="max-width:200px;"></div>
                <div class="col-md-3"><img src="img-logo7.png" style="max-width:200px;"></div>
                <div class="col-md-3"><img src="img-logo8.png" style="max-width:200px;"></div>
                <div class="col-md-3"><img src="img-logo9.png" style="max-width:200px;"></div>
                <div class="col-md-3"><img src="img-logo10.png" style="max-width:200px;"></div>
            </div>
        </div>
    </body>

</html>
