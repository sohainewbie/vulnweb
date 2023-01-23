# LFI to RCE Scenario 
This repository is a Dockerized php application containing a LFI (Local File Inclusion) vulnerability which can lead to RCE (Remote Code Execution).<br><br>
The ideas behind the challenge are:</br>
* Basic path traversal sanitization
* Execute OS command through LFI vulnerability.

# Quick Start Using Docker
**Using docker hub (Quickest):**
1. To access the challenges, you need <a href="https://docs.docker.com/install">docker</a> installed.</br>
2. Run this command to pull and run the image from docker hub:</br>`sudo docker-compose up -d`
3. Access the sample web with this URL: <a href="http://localhost:9099">http://localhost:9099</a></br></br>
