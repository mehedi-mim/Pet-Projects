import 'package:flutter/material.dart';
import 'package:carousel_pro/carousel_pro.dart';

//my own imports
import 'package:OnlineHaat/components/horizontal_listview.dart';

void main() {
  runApp(MaterialApp(
    debugShowCheckedModeBanner: false,
    home: HomePage(),
  ));
}

class HomePage extends StatefulWidget {
  @override
  _HomePageState createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  @override
  Widget build(BuildContext context) {
    Widget imageCarousel = new Container(
      height: 200.0,
      child: new Carousel(
        boxFit: BoxFit.cover,
        images: [
          AssetImage('images/img1.jpg'),
          AssetImage('images/img2.jpg'),
          AssetImage('images/img3.jpg'),
          AssetImage('images/img4.jpg'),
          AssetImage('images/img5.jpg'),
          AssetImage('images/img6.jpg'),
        ],
        autoplay: true,
        dotSize: 4.0,
        indicatorBgPadding: 2.0,
        dotColor: Colors.blue,
        animationCurve: Curves.fastOutSlowIn,
        animationDuration: Duration(milliseconds: 1000),
      ),
    );

    return Scaffold(
      appBar: new AppBar(
        elevation: 0.0,
        backgroundColor: Colors.cyan,
        title: Text('OnlineHaat'),
        actions: <Widget>[
          new IconButton(
              icon: Icon(Icons.search), color: Colors.white, onPressed: () {}),
          new IconButton(
              icon: Icon(Icons.shopping_cart),
              color: Colors.white,
              onPressed: () {})
        ],
      ),
      drawer: new Drawer(
        child: new ListView(
          children: <Widget>[
//                 header part
            new UserAccountsDrawerHeader(
              accountName: Text('Mehedi Mim'),
              accountEmail: Text('mehedi.cse.16@gmail.com'),
              currentAccountPicture: GestureDetector(
                child: new CircleAvatar(
                  backgroundColor: Colors.blueGrey,
                  child: Icon(Icons.person, color: Colors.white),
                ),
              ),
              decoration: new BoxDecoration(color: Colors.cyan),
            ),
//              body
            InkWell(
              onTap: () {},
              child: ListTile(
                title: Text('Home Page'),
                leading: Icon(Icons.home, color: Colors.indigo),
              ),
            ),
            InkWell(
              onTap: () {},
              child: ListTile(
                title: Text('MyAccount'),
                leading: Icon(Icons.person, color: Colors.green),
              ),
            ),
            InkWell(
              onTap: () {},
              child: ListTile(
                title: Text('Orders Taken'),
                leading: Icon(Icons.shopping_basket, color: Colors.brown),
              ),
            ),
            InkWell(
              onTap: () {},
              child: ListTile(
                title: Text('Categories'),
                leading: Icon(Icons.dashboard, color: Colors.cyan),
              ),
            ),
            InkWell(
              onTap: () {},
              child: ListTile(
                title: Text('My Favourite'),
                leading: Icon(Icons.favorite, color: Colors.red),
              ),
            ),
            Divider(),
            InkWell(
              onTap: () {},
              child: ListTile(
                title: Text('Settings'),
                leading: Icon(Icons.settings, color: Colors.grey),
              ),
            ),
            InkWell(
              onTap: () {},
              child: ListTile(
                title: Text('About'),
                leading: Icon(Icons.help, color: Colors.blue),
              ),
            )
          ],
        ),
      ),
      body: new ListView(
        children: <Widget>[
          //image carousal
          imageCarousel,
          //Padding Widget
          new Padding(
            padding: const EdgeInsets.all(8.0),
            child: new Text('Categories'),
          ),
          //Horizntal listview ...............
          HorizontalList(),
          new Padding(
            padding: const EdgeInsets.all(15.0),
            child: new Text('Recent products'),
          ),
        ],
      ),
    );
  }
}
