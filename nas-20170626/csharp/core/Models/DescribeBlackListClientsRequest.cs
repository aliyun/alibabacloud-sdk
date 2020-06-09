// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeBlackListClientsRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("FileSystemId")]
        [Validation(Required=true)]
        public string FileSystemId { get; set; }

        [NameInMap("ClientIP")]
        [Validation(Required=false)]
        public string ClientIP { get; set; }

    }

}
