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

git add ${Local}
echo -e "【 添加本地文件 】"
git status
echo -e "【 显示文件变化 】"
git commit -m "${MSG}"
echo -e "【 更新本地仓库 】"
git remote rm ${Name}
echo -e "【 删除远程缓存 】"
git remote add ${Name} ${SSH}
echo -e "【 添加远程仓库 】"
git remote set-url ${Name} ${SSH}
echo -e "【 添加远程链接 】"
git push -u ${Name} +master
echo -e "【 上传远程仓库 】"

echo -e "\n【 上传完成 】\n"
exit

