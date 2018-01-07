#!/bin/bash
# Author: David Deng
# Url: https://covear.top

echo -e "\n【 开始上传 】\n"

read -p "请输入本地文件夹路径: " Local
read -p "请输入远程仓库名: " Name
read -p "请输入对本次上传的描述: " MSG
SSH="git@github.com:DavidDengHui/"${Name}".git"

cd ${Local}

(
cat <<EOF
# The following file types do not need to be uploaded
*.sh
*.swp
EOF
) >.gitignore


i=0

git add ${Local}
((i++));
echo ${i}

git status
((i++));
echo ${i}

git commit -m "${MSG}"
((i++));
echo ${i}

git remote rm ${Name}
((i++));
echo ${i}

git remote add ${Name} ${SSH}
((i++));
echo ${i}

git remote set-url ${Name} ${SSH}
((i++));
echo ${i}

git push -u ${Name} +master
((i++));
echo ${i}

echo -e "\n【 上传完成 】\n"
exit

