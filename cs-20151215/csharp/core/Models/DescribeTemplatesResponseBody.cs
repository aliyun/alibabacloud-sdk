// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeTemplatesResponseBody : TeaModel {
        [NameInMap("template")]
        [Validation(Required=true)]
        public string Template { get; set; }

        [NameInMap("acl")]
        [Validation(Required=true)]
        public string Acl { get; set; }

        [NameInMap("name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("tags")]
        [Validation(Required=true)]
        public string Tags { get; set; }

        [NameInMap("template_type")]
        [Validation(Required=true)]
        public string TemplateType { get; set; }

        [NameInMap("description")]
        [Validation(Required=true)]
        public string Description { get; set; }

    }

}
