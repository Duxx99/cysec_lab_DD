# Use Kali Linux as the base image
FROM kalilinux/kali-rolling

# Update the package repositories and upgrade the installed packages
RUN apt-get update -y && \
    apt install nano golang-go ca-certificates wget unzip ffuf git sqlmap net-tools netcat-traditional nmap dnsutils curl python3-pip -y

WORKDIR /opt

RUN wget https://github.com/projectdiscovery/katana/releases/download/v1.0.5/katana_1.0.5_linux_amd64.zip
RUN unzip katana_1.0.5_linux_amd64.zip
RUN rm katana_1.0.5_linux_amd64.zip

RUN git clone https://github.com/danielmiessler/SecLists.git

ENV PATH="/opt:${PATH}"

# Set the default command to start a shell session
CMD ["bash"]