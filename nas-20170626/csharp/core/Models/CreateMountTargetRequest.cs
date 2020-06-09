// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class CreateMountTargetRequest : TeaModel {
        [NameInMap("FileSystemId")]
        [Validation(Required=true)]
        public string FileSystemId { get; set; }

        [NameInMap("AccessGroupName")]
        [Validation(Required=true)]
        public string AccessGroupName { get; set; }

        [NameInMap("NetworkType")]
        [Validation(Required=true)]
        public string NetworkType { get; set; }

        [NameInMap("VpcId")]
        [Validation(Required=false)]
        public string VpcId { get; set; }

        [NameInMap("VSwitchId")]
        [Validation(Required=false)]
        public string VSwitchId { get; set; }

        [NameInMap("SecurityGroupId")]
        [Validation(Required=false)]
        public string SecurityGroupId { get; set; }

    }

}
