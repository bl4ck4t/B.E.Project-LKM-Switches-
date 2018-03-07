void setup() {
 pinMode(13, OUTPUT);
 Serial.begin(9600);
}
void loop() {
 if (Serial.available() > 0) {
   int state = Serial.read();
   if (state == '1') {
     digitalWrite(13, HIGH);
   }
   if (state == '0') {
     digitalWrite(13, LOW);
   }
 }
 delay(50);
}
