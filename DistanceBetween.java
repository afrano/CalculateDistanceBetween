/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package distancebetween;

import static java.lang.Math.cos;
import static jdk.nashorn.internal.objects.NativeMath.round;

/**
 *
 * @author nano
 */
public class DistanceBetween {

    public static void main(String[] args) {
        System.out.println("Jarak Univ Sadhar ke Tugu Jogja : " + getDistanceBetween(-7.778056, 110.3857267, -7.782865, 110.367084) + " Kilometer\n");
    }

    public static double getDistanceBetween(double latitude1, double longitude1, double latitude2, double longitude2) {
        double theta = longitude1 - longitude2;
        double Jarak = (Math.sin(deg2rad(latitude1)) * Math.sin(deg2rad(latitude2))) + (Math.cos(deg2rad(latitude1)) * Math.cos(deg2rad(latitude2)) * cos(deg2rad(theta)));
        Jarak = Math.acos(Jarak);
        Jarak = rad2deg(Jarak);
        Jarak = Jarak * 60 * 1.1515;
        double JarakTotal = Jarak * 1.609344;
        return (JarakTotal);
    }
    // function untuk converts derajat ke radian 
    private static double deg2rad(double deg) {
        return (deg * Math.PI / 180.0);
    }

    // function untuk converts radian ke radian
    private static double rad2deg(double rad) {
        return (rad * 180 / Math.PI);
    }

}
