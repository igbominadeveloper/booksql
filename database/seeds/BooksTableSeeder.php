<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Book::create([
            'title' => 'Education and the society',
            'author' => 'Maximillan Schwazer',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description goes here',
            'link' => 'https://books.google.com.ng/books?id=FPbcdfMFrckC&printsec=frontcover&dq=education+and+the+society&hl=en&sa=X&ved=0ahUKEwi8lOSwl9DkAhWzolwKHXIID80Q6AEIJjAA',
            'category_id' => 3,
            'featured' => false,
        ]);

       Book::create([
            'title' => 'My experience with GraphQl',
            'author' => 'Daniel Morbit',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=q5NoDwAAQBAJ&dq=my+experience+with+graphql&hl=en&sa=X&ved=0ahUKEwi1oO-6l9DkAhUUQUEAHTfVBiUQ6AEIJjAA',
            'category_id' => 7,
            'featured' => false,
        ]);

       Book::create([
            'title' => 'Getting rich at 20',
            'author' => 'Perry Winkle',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=3OZ_DwAAQBAJ&printsec=frontcover&dq=getting+rich+at+20&hl=en&sa=X&ved=0ahUKEwjc8rrGl9DkAhX_QUEAHdQZCA0Q6AEILDAB',
            'category_id' => 1,
        ]);

       Book::create([
            'title' => 'My Business is my business',
            'author' => 'Abraham Lipshit',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=nZQmPwAACAAJ&dq=my+business+is+my+business&hl=en&sa=X&ved=0ahUKEwi5i5Pal9DkAhVNZ8AKHQViDIMQ6AEILDAB',
            'category_id' => 1,
            'featured' => false,
        ]);

       Book::create([
            'title' => 'Growing old in the winter',
            'author' => 'Harry Maguire',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=FpmACgAAQBAJ&printsec=frontcover&dq=growing+old+in+the+winter&hl=en&sa=X&ved=0ahUKEwi1zLzjl9DkAhVGfMAKHX91AnIQ6AEIOTAD',
            'category_id' => 5,
            'featured' => false,
        ]);

       Book::create([
            'title' => 'Winter is here',
            'author' => 'Albot Green',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=n0a_swEACAAJ&dq=winter+is+here&hl=en&sa=X&ved=0ahUKEwjo3dfrl9DkAhVIiFwKHWV_CTkQ6AEIJjAA',
            'category_id' => 5,
            'featured' => false,
        ]);

       Book::create([
            'title' => 'The wizard of Oz',
            'author' => 'Favour Adeleke',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=SCMbBQAAQBAJ&pg=PT46&dq=the+wizard+of+oz&hl=en&sa=X&ved=0ahUKEwjQsaLyl9DkAhWMUMAKHW-NBVIQ6AEINDAC',
            'category_id' => 3,
            'featured' => false,
        ]);

       Book::create([
            'title' => 'Going green is the new way',
            'author' => 'Green Holloway',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=kyIOkSebf90C&printsec=frontcover&dq=going+green+is+the+new+way&hl=en&sa=X&ved=0ahUKEwiNtr37l9DkAhWpQEEAHaIVA_gQ6AEIJjAA',
            'category_id' => 4,
            'featured' => false,
        ]);

       Book::create([
            'title' => 'Building businesses from scratch',
            'author' => 'Ezekiel Hackman',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=FY1eAAAAQBAJ&dq=building+businesses+from+scratch&hl=en&sa=X&ved=0ahUKEwjfgeWDmNDkAhUTHcAKHT_jCJ0Q6AEILTAB',
            'category_id' => 1,
            'featured' => false,
        ]);

       Book::create([
            'title' => 'The rise and fall of Idi Amin',
            'author' => 'Victor Ji',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=AbiDQgAACAAJ&dq=the+rise+and+fall+of+idi+amin&hl=en&sa=X&ved=0ahUKEwj9rIiMmNDkAhUWiFwKHalCBkIQ6AEIJjAA',
            'category_id' => 2,
        ]);

       Book::create([
            'title' => 'The richest man in the West',
            'author' => 'Pointer Lee',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=MR9ICgAAQBAJ&printsec=frontcover&dq=the+richest+man+in+the+west&hl=en&sa=X&ved=0ahUKEwjqsamTmNDkAhVIilwKHXI0AjoQ6AEIRDAE',
            'category_id' => 1,
        ]);

       Book::create([
            'title' => 'GreenHouse emission: making it stop',
            'author' => 'John Luthor',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=j9p1DwAAQBAJ&printsec=frontcover&dq=greenhouse+emission&hl=en&sa=X&ved=0ahUKEwi91cGemNDkAhXbMMAKHbGcCDIQ6AEIODAC',
            'category_id' => 4,
            'featured' => false,
        ]);

       Book::create([
            'title' => 'Buying expensive stuffs at a penny',
            'author' => 'Aliko Dantata',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=cFPnAgAAQBAJ&pg=PT66&dq=buying+expensive+stuffs+at+a+penny&hl=en&sa=X&ved=0ahUKEwjczMurmNDkAhW3SEEAHduIANQQ6AEILTAB',
            'category_id' => 6,
            'featured' => false,
        ]);

       Book::create([
            'title' => 'The cost of Javascript',
            'author' => 'Kent C. Dodds',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=ED6ph4WEIoQC&printsec=frontcover&dq=the+cost+of+javascript&hl=en&sa=X&ved=0ahUKEwiu6YO0mNDkAhXNa8AKHapbA-oQ6AEINDAC',
            'category_id' => 7,
            'featured' => false,
        ]);

       Book::create([
            'title' => 'How to make 1 DB Calls',
            'author' => 'Kossy Ugochukwu',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=ED6ph4WEIoQC&printsec=frontcover&dq=the+cost+of+javascript&hl=en&sa=X&ved=0ahUKEwiu6YO0mNDkAhXNa8AKHapbA-oQ6AEINDAC',
            'category_id' => 7,
            'featured' => false,
        ]);

       Book::create([
            'title' => 'Travelling on Business',
            'author' => 'Ebenezer Ennim',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=Fcvgf0WVCvsC&pg=PT27&dq=travelling+on+business&hl=en&sa=X&ved=0ahUKEwigodjJmNDkAhVUdcAKHWkHBqEQ6AEIOjAC',
            'category_id' => 6,
            'featured' => false,
        ]);

       Book::create([
            'title' => 'Making railroads work in Nigeria',
            'author' => 'Fiyin Kolawole',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=H0QvAQAAIAAJ&q=making+railroads+work+in+nigeria&dq=making+railroads+work+in+nigeria&hl=en&sa=X&ved=0ahUKEwi36OjSmNDkAhVCiVwKHbmmA-4Q6AEIPjAE',
            'category_id' => 1,
            'featured' => false,
        ]);

       Book::create([
            'title' => 'How to win Elections in Nigeria',
            'author' => 'Chude Jideonwo',
            'image' => 'https://picsum.photos/id/1001/5616/3744',
            'description' => 'description',
            'link' => 'https://books.google.com.ng/books?id=oQ3TswEACAAJ&dq=how+to+win+elections+in+nigeria&hl=en&sa=X&ved=0ahUKEwjK14LdmNDkAhUQecAKHfW9B28Q6AEIJjAA',
            'category_id' => 2,
            'featured' => false,
        ]);
    }
}
