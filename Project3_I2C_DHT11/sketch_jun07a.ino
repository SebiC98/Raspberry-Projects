#include <Wire.h>
#include <dht11.h>

dht11 DHT;
#define DHT11_PIN 2
#define SLAVE_ADDRESS 0x2A

char DHT_temperature[10];
char DHT_humidity[10];


void setup() {
    Wire.begin(SLAVE_ADDRESS);
    Wire.onRequest(sendData); 
}

void loop() {
  int chk;
  chk = DHT.read(DHT11_PIN);    // READ DATA
  itoa(DHT.humidity,DHT_humidity,10);
  itoa(DHT.temperature,DHT_temperature,10);
}


int index = 0;

// callback for sending data
void sendData() { 
    Wire.write(DHT_temperature);
    Wire.write(DHT_humidity);
 }
