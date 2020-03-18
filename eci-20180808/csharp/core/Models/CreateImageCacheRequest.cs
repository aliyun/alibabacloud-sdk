// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ECI.Models
{
    public class CreateImageCacheRequest : TeaModel {
        [NameInMap("OwnerId")]
        [Validation(Required=false)]
        public long OwnerId { get; set; }

        [NameInMap("ResourceOwnerAccount")]
        [Validation(Required=false)]
        public string ResourceOwnerAccount { get; set; }

        [NameInMap("ResourceOwnerId")]
        [Validation(Required=false)]
        public long ResourceOwnerId { get; set; }

        [NameInMap("OwnerAccount")]
        [Validation(Required=false)]
        public string OwnerAccount { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ZoneId")]
        [Validation(Required=false)]
        public string ZoneId { get; set; }

        [NameInMap("SecurityGroupId")]
        [Validation(Required=true)]
        public string SecurityGroupId { get; set; }

        [NameInMap("VSwitchId")]
        [Validation(Required=true)]
        public string VSwitchId { get; set; }

        [NameInMap("ImageCacheName")]
        [Validation(Required=true)]
        public string ImageCacheName { get; set; }

        [NameInMap("ImageRegistryCredential")]
        [Validation(Required=false)]
        public List<CreateImageCacheRequestImageRegistryCredential> ImageRegistryCredential { get; set; }
        public class CreateImageCacheRequestImageRegistryCredential : TeaModel {
            [NameInMap("Server")]
            [Validation(Required=true)]
            public string Server { get; set; }

            [NameInMap("UserName")]
            [Validation(Required=true)]
            public string UserName { get; set; }

            [NameInMap("Password")]
            [Validation(Required=true)]
            public string Password { get; set; }

        }

        [NameInMap("EipInstanceId")]
        [Validation(Required=false)]
        public string EipInstanceId { get; set; }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=false)]
        public string ResourceGroupId { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("Image")]
        [Validation(Required=true)]
        public List<string> Image { get; set; }

        [NameInMap("ImageCacheSize")]
        [Validation(Required=false)]
        public int? ImageCacheSize { get; set; }

        [NameInMap("RetentionDays")]
        [Validation(Required=false)]
        public int? RetentionDays { get; set; }

    }

}
