"""
 Licensed to the Apache Software Foundation (ASF) under one
 or more contributor license agreements.  See the NOTICE file
 distributed with this work for additional information
 regarding copyright ownership.  The ASF licenses this file
 to you under the Apache License, Version 2.0 (the
 "License"); you may not use this file except in compliance
 with the License.  You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing,
 software distributed under the License is distributed on an
 "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 KIND, either express or implied.  See the License for the
 specific language governing permissions and limitations
 under the License.
"""

from setuptools import setup, find_packages
import os

"""
setup module for alibabacloud_ocr20191230.

Created on 04/08/2020

@author: Alibaba Cloud SDK
"""

PACKAGE = "alibabacloud_ocr20191230"
NAME = "alibabacloud_ocr20191230"
DESCRIPTION = "Alibaba Cloud OCR (20191230) SDK Library for Python"
AUTHOR = "Alibaba Cloud SDK"
AUTHOR_EMAIL = "sdk-team@alibabacloud.com"
URL = "https://github.com/aliyun/alibabacloud-sdk"

TOPDIR = os.path.dirname(__file__) or "."
VERSION = __import__(PACKAGE).__version__
REQUIRES = ["alibabacloud_oss_sdk==0.0.2","alibabacloud_openplatform20191219==1.0.2","alibabacloud_rpc_util==0.0.3","alibabacloud_tea_rpc==0.0.4","alibabacloud_oss_util==0.0.1","alibabacloud_tea_util==0.1.2","alibabacloud_tea_fileform==0.0.1","alibabacloud_endpoint_util==0.0.2"]

desc_file = open("README.md", encoding='utf-8')
try:
    LONG_DESCRIPTION = desc_file.read()
finally:
    desc_file.close()

setup(
    name=NAME,
    version=VERSION,
    description=DESCRIPTION,
    long_description=LONG_DESCRIPTION,
    author=AUTHOR,
    author_email=AUTHOR_EMAIL,
    license="Apache License 2.0",
    url=URL,
    keywords=["alibabacloud_ocr20191230"],
    packages=find_packages(exclude=["tests*"]),
    include_package_data=True,
    platforms="any",
    install_requires=REQUIRES,
    classifiers=(
        "Development Status :: 4 - Beta",
        "Intended Audience :: Developers",
        "License :: OSI Approved :: Apache Software License",
        "Programming Language :: Python",
        "Programming Language :: Python :: 3",
        "Programming Language :: Python :: 3.3",
        "Programming Language :: Python :: 3.4",
        "Programming Language :: Python :: 3.5",
        "Programming Language :: Python :: 3.6",
        'Programming Language :: Python :: 3.7',
        'Programming Language :: Python :: 3.8',
        "Topic :: Software Development"
    )
)
