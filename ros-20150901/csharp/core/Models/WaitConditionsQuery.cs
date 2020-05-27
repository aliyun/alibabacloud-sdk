// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20150901.Models
{
    public class WaitConditionsQuery : TeaModel {
        [NameInMap("stackname")]
        [Validation(Required=true)]
        public string Stackname { get; set; }

        [NameInMap("stackid")]
        [Validation(Required=true)]
        public string Stackid { get; set; }

        [NameInMap("resource")]
        [Validation(Required=true)]
        public string Resource { get; set; }

        [NameInMap("expire")]
        [Validation(Required=true)]
        public string Expire { get; set; }

        [NameInMap("signature")]
        [Validation(Required=true)]
        public string Signature { get; set; }

    }

}
