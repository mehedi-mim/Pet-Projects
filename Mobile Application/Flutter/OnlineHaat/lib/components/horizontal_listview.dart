import 'package:flutter/material.dart';

class HorizontalList extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Container(
      height: 100.0,
      child: ListView(
        scrollDirection: Axis.horizontal,
        children: <Widget>[
          Category(
            imagelocation: 'images/cats/tshirt.png',
            imagecaption: 'Tshirst',
          ),
          Category(
            imagelocation: 'images/cats/jeans.png',
            imagecaption: 'Jeans',
          ),
          Category(
            imagelocation: 'images/cats/shoe.png',
            imagecaption: 'Shoe',
          ),
          Category(
            imagelocation: 'images/cats/formal.png',
            imagecaption: 'Formal',
          ),
          Category(
            imagelocation: 'images/cats/informal.png',
            imagecaption: 'Informal',
          ),
          Category(
            imagelocation: 'images/cats/dress.png',
            imagecaption: 'Dress',
          ),
          Category(
            imagelocation: 'images/cats/accessories.png',
            imagecaption: 'Accessories',
          )
        ],
      ),
    );
  }
}

class Category extends StatelessWidget {
  final String imagelocation;
  final String imagecaption;

  Category({this.imagelocation, this.imagecaption});

  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.all(2.0),
      child: InkWell(
          onTap: () {},
          child: Container(
            width: 100.0,
            child: ListTile(
                title: Image.asset(
                  imagelocation,
                  width: 100.0,
                  height: 80,
                ),
                subtitle: Container(
                  alignment: Alignment.topCenter,
                  child: Text(
                    imagecaption,
                    style: new TextStyle(fontSize: 12.0),
                  ),
                )),
          )),
    );
  }
}
