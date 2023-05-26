// ignore_for_file: use_key_in_widget_constructors, prefer_const_constructors

import 'package:flutter/material.dart';
import 'home.dart';

void main() => runApp(App());

class App extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      // themeMode: ThemeMode.dark,
      theme: ThemeData(
          primaryColor: Color.fromARGB(31, 218, 233, 11),
          scaffoldBackgroundColor: Color.fromARGB(225, 236, 252, 10),
          appBarTheme: AppBarTheme(
              backgroundColor: Color.fromARGB(0, 219, 22, 22), elevation: 0)),
      title: 'Flutter + PHP CRUD',
      initialRoute: '/',
      routes: {
        '/': (context) => Home(),
      },
    );
  }
}
