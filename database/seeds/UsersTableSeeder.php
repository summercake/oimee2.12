<?php
use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);
        // 头像假数据
        $avatars = [
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/s5ehp11z6s.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/Lhd1SHqu86.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/LOnMrqbHJn.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/xAuDMxteQy.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/ZqM7iaP4CR.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/NDnzMutoxX.png?imageView2/1/w/200/h/200',
        ];
        // 生成数据集合
        $users = factory(User::class)
            -> times(100)
            -> make()
            -> each(function ($user, $index)
            use ($faker, $avatars){
                // 从头像数组中随机取出一个并赋值
                $user -> user_avatar = $faker -> randomElement($avatars);
                $user -> user_gender = 1;
                $user -> role_id = 1;
            });
        // 让隐藏字段可见，并将数据集合转换为数组
        $user_array = $users -> makeVisible(['user_password', 'remember_token']) -> toArray();
        // 插入到数据库中
        User ::insert($user_array);
        // 单独处理第一个用户的数据
        $user = User ::find(1);
        $user -> user_name = 'jack';
        $user -> user_email = 'jack@oimee.com';
        $user -> user_avatar = 'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/ZqM7iaP4CR.png?imageView2/1/w/200/h/200';
        $user -> save();
    }
}
