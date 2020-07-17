// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class CloseDBClusterMigrationRequest : TeaModel {
        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("ContinueEnableBinlog")]
        [Validation(Required=false)]
        public bool? ContinueEnableBinlog { get; set; }

    }

}
